<?php

namespace Kronos\Tests\ContentSecurityPolicy;

use Kronos\ContentSecurityPolicy\Policy;
use PHPUnit\Framework\TestCase;

class PolicyTest extends TestCase
{
    private const CSP_HEADER = 'Content-Security-Policy: ';
    private const CSP_HEADER_REPORT_ONLY = 'Content-Security-Policy-Report-Only: ';
    private const SOME_DEFAULT_SRC = ['github.com', 'packagist.org'];
    private const SOME_REPORT_URI = 'example.test/report';

    protected Policy $policy;

    protected function setUp(): void
    {
        $this->policy = new Policy();
    }

    public function test_noDirective_getHeader_outputNothing()
    {
        $actual = $this->policy->getHeader();

        $excepted = '';
        $this->assertSame($excepted, $actual);
    }

    public function test_atLeastOneDirective_getHeader_containsHeaderAtBeginning()
    {
        $this->policy->base_uri = self::SOME_DEFAULT_SRC;

        $actual = $this->policy->getHeader();

        $excepted = '/^' . self::CSP_HEADER . '.+/';
        $this->assertMatchesRegularExpression($excepted, $actual);
    }

    public function test_reportOnlyAndAtLeastOneDirective_getHeader_hasReportOnlyHeader()
    {
        $this->policy->base_uri = self::SOME_DEFAULT_SRC;
        $this->policy->report_only = true;

        $actual = $this->policy->getHeader();

        $excepted = '/^' . self::CSP_HEADER_REPORT_ONLY . '.+/';
        $this->assertMatchesRegularExpression($excepted, $actual);
    }

    public function test_arrayDirective_getHeader_outputDirectiveAfterHeaderValuesSeparatedWithSpacesAndUnderscores()
    {
        $this->policy->default_src = self::SOME_DEFAULT_SRC;

        $actual = $this->policy->getHeader();

        $expected = self::CSP_HEADER . 'default-src github.com packagist.org';
        $this->assertSame($expected, $actual);
    }

    public function test_stringDirective_getHeader_outputDirectiveSeparatedWithSpacesAndUnderscoresReplacedWithDashes()
    {
        $this->policy->report_uri = self::SOME_REPORT_URI;

        $actual = $this->policy->getHeader();

        $expected = self::CSP_HEADER . 'report-uri example.test/report';
        $this->assertSame($expected, $actual);
    }

    public function test_booleanDirective_getHeader_outputDirectiveNameOnlyAndUnderscoresReplacedWithDashes()
    {
        $this->policy->block_all_mixed_content = true;

        $actual = $this->policy->getHeader();

        $expected = self::CSP_HEADER . 'block-all-mixed-content';
        $this->assertSame($expected, $actual);
    }

    public function test_multipleDirectives_getHeader_outputDirectivesSeparatedBySemiColon()
    {
        $this->policy->report_uri = self::SOME_REPORT_URI;
        $this->policy->block_all_mixed_content = true;

        $actual = $this->policy->getHeader();

        $expected = self::CSP_HEADER . 'report-uri example.test/report; block-all-mixed-content';
        $this->assertSame($expected, $actual);
    }

    public function test_fetchConstants_beginAndEndWithSingleQuotes()
    {
        $expected = "/'.+'/";

        $this->assertMatchesRegularExpression($expected, Policy::FETCH_NONE);
        $this->assertMatchesRegularExpression($expected, Policy::FETCH_REPORT_SAMPLE);
        $this->assertMatchesRegularExpression($expected, Policy::FETCH_SELF);
        $this->assertMatchesRegularExpression($expected, Policy::FETCH_STRICT_DYNAMIC);
        $this->assertMatchesRegularExpression($expected, Policy::FETCH_UNSAFE_EVAL);
        $this->assertMatchesRegularExpression($expected, Policy::FETCH_UNSAFE_INLINE);
    }
}
