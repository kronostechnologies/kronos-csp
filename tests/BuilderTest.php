<?php

namespace Kronos\Tests\ContentSecurityPolicy;

use Kronos\ContentSecurityPolicy\Builder;
use Kronos\ContentSecurityPolicy\Policy;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    private const AN_ARRAY = ['kronos-web.com/fna/', 'example.test'];
    private const REPLACEMENT_ARRAY = ['fonts.website.test'];
    private const A_URI = 'new.src.uri';
    private const OLD_URI = 'old.src.uri';
    private const AN_ARRAY_WITH_A_URI = ['kronos-web.com/fna/', 'example.test', 'new.src.uri'];

    private Policy $policy;

    private Builder $builder;

    protected function setUp(): void
    {
        $this->policy = new Policy();
        $this->builder = new Builder($this->policy);
    }

    public function test_getContentSecurityPolicy_returnPolicy()
    {
        $actual = $this->builder->getContentSecurityPolicy();

        $this->assertSame($this->policy, $actual);
    }

    public function test_setDefaultSrc_replacesPolicyDefaultSrc()
    {
        $this->policy->default_src = self::AN_ARRAY;

        $this->builder->setDefaultSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->default_src);
    }

    public function test_addDefaultSrc_addsPolicyDefaultSrc()
    {
        $this->policy->default_src = self::AN_ARRAY;

        $this->builder->addDefaultSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->default_src);
    }

    public function test_setChildSrc_replacesPolicyChildSrc()
    {
        $this->policy->child_src = self::AN_ARRAY;

        $this->builder->setChildSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->child_src);
    }

    public function test_addChildSrc_addsPolicyChildSrc()
    {
        $this->policy->child_src = self::AN_ARRAY;

        $this->builder->addChildSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->child_src);
    }

    public function test_setConnectSrc_replacesPolicyConnectSrc()
    {
        $this->policy->connect_src = self::AN_ARRAY;

        $this->builder->setConnectSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->connect_src);
    }

    public function test_addConnectSrc_addsPolicyConnectSrc()
    {
        $this->policy->connect_src = self::AN_ARRAY;

        $this->builder->addConnectSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->connect_src);
    }

    public function test_setFontSrc_replacesPolicyFontSrc()
    {
        $this->policy->font_src = self::AN_ARRAY;

        $this->builder->setFontSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->font_src);
    }

    public function test_addFontSrc_addsPolicyFontSrc()
    {
        $this->policy->font_src = self::AN_ARRAY;

        $this->builder->addFontSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->font_src);
    }

    public function test_setFrameSrc_replacesPolicyFrameSrc()
    {
        $this->policy->frame_src = self::AN_ARRAY;

        $this->builder->setFrameSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->frame_src);
    }

    public function test_addFrameSrc_addsPolicyFrameSrc()
    {
        $this->policy->frame_src = self::AN_ARRAY;

        $this->builder->addFrameSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->frame_src);
    }

    public function test_setImgSrc_replacesPolicyImgSrc()
    {
        $this->policy->img_src = self::AN_ARRAY;

        $this->builder->setImgSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->img_src);
    }

    public function test_addImgSrc_addsPolicyImgSrc()
    {
        $this->policy->img_src = self::AN_ARRAY;

        $this->builder->addImgSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->img_src);
    }

    public function test_setManifestSrc_replacesPolicyManifestSrc()
    {
        $this->policy->manifest_src = self::AN_ARRAY;

        $this->builder->setManifestSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->manifest_src);
    }

    public function test_addManifestSrc_addsPolicyManifestSrc()
    {
        $this->policy->manifest_src = self::AN_ARRAY;

        $this->builder->addManifestSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->manifest_src);
    }

    public function test_setMediaSrc_replacesPolicyMediaSrc()
    {
        $this->policy->media_src = self::AN_ARRAY;

        $this->builder->setMediaSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->media_src);
    }

    public function test_addMediaSrc_addsPolicyMediaSrc()
    {
        $this->policy->media_src = self::AN_ARRAY;

        $this->builder->addMediaSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->media_src);
    }

    public function test_setObjectSrc_replacesPolicyObjectSrc()
    {
        $this->policy->object_src = self::AN_ARRAY;

        $this->builder->setObjectSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->object_src);
    }

    public function test_addObjectSrc_addsPolicyObjectSrc()
    {
        $this->policy->object_src = self::AN_ARRAY;

        $this->builder->addObjectSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->object_src);
    }

    public function test_setScriptSrc_replacesPolicyScriptSrc()
    {
        $this->policy->script_src = self::AN_ARRAY;

        $this->builder->setScriptSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->script_src);
    }

    public function test_addScriptSrc_addsPolicyScriptSrc()
    {
        $this->policy->script_src = self::AN_ARRAY;

        $this->builder->addScriptSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->script_src);
    }

    public function test_setScriptSrcElem_replacesPolicyScriptSrcElem()
    {
        $this->policy->script_src_elem = self::AN_ARRAY;

        $this->builder->setScriptSrcElem(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->script_src_elem);
    }

    public function test_addScriptSrcElem_addsPolicyScriptSrcElem()
    {
        $this->policy->script_src_elem = self::AN_ARRAY;

        $this->builder->addScriptSrcElem(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->script_src_elem);
    }

    public function test_setScriptSrcAttr_replacesPolicyScriptSrcAttr()
    {
        $this->policy->script_src_attr = self::AN_ARRAY;

        $this->builder->setScriptSrcAttr(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->script_src_attr);
    }

    public function test_addScriptSrcAttr_addsPolicyScriptSrcAttr()
    {
        $this->policy->script_src_attr = self::AN_ARRAY;

        $this->builder->addScriptSrcAttr(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->script_src_attr);
    }

    public function test_setStyleSrc_replacesPolicyStyleSrc()
    {
        $this->policy->style_src = self::AN_ARRAY;

        $this->builder->setStyleSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->style_src);
    }

    public function test_addStyleSrc_addsPolicyStyleSrc()
    {
        $this->policy->style_src = self::AN_ARRAY;

        $this->builder->addStyleSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->style_src);
    }

    public function test_setStyleSrcElem_replacesPolicyStyleSrcElem()
    {
        $this->policy->style_src_elem = self::AN_ARRAY;

        $this->builder->setStyleSrcElem(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->style_src_elem);
    }

    public function test_addStyleSrcElem_addsPolicyStyleSrcElem()
    {
        $this->policy->style_src_elem = self::AN_ARRAY;

        $this->builder->addStyleSrcElem(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->style_src_elem);
    }

    public function test_setStyleSrcAttr_replacesPolicyStyleSrcAttr()
    {
        $this->policy->style_src_attr = self::AN_ARRAY;

        $this->builder->setStyleSrcAttr(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->style_src_attr);
    }

    public function test_addStyleSrcAttr_addsPolicyStyleSrcAttr()
    {
        $this->policy->style_src_attr = self::AN_ARRAY;

        $this->builder->addStyleSrcAttr(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->style_src_attr);
    }

    public function test_setWorkerSrc_replacesPolicyWorkerSrc()
    {
        $this->policy->worker_src = self::AN_ARRAY;

        $this->builder->setWorkerSrc(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->worker_src);
    }

    public function test_addWorkerSrc_addsPolicyWorkerSrc()
    {
        $this->policy->worker_src = self::AN_ARRAY;

        $this->builder->addWorkerSrc(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->worker_src);
    }

    public function test_setBaseUri_replacesPolicyBaseUri()
    {
        $this->policy->base_uri = self::AN_ARRAY;

        $this->builder->setBaseUri(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->base_uri);
    }

    public function test_addBaseUri_addsPolicyBaseUri()
    {
        $this->policy->base_uri = self::AN_ARRAY;

        $this->builder->addBaseUri(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->base_uri);
    }

    public function test_setPluginTypes_replacesPolicyPluginType()
    {
        $this->policy->plugin_types = self::AN_ARRAY;

        $this->builder->setPluginTypes(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->plugin_types);
    }

    public function test_addPluginType_addsPolicyPluginType()
    {
        $this->policy->plugin_types = self::AN_ARRAY;

        $this->builder->addPluginType(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->plugin_types);
    }

    public function test_setSandboxDirectives_replacesPolicySandboxDirective()
    {
        $this->policy->sandbox = self::AN_ARRAY;

        $this->builder->setSandboxDirectives(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->sandbox);
    }

    public function test_addSandboxDirective_addsPolicySandboxDirective()
    {
        $this->policy->sandbox = self::AN_ARRAY;

        $this->builder->addSandboxDirective(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->sandbox);
    }

    public function test_setFormAction_replacesPolicyFormAction()
    {
        $this->policy->form_action = self::AN_ARRAY;

        $this->builder->setFormAction(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->form_action);
    }

    public function test_addFormAction_addsPolicyFormAction()
    {
        $this->policy->form_action = self::AN_ARRAY;

        $this->builder->addFormAction(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->form_action);
    }

    public function test_setFrameAncestors_replacesPolicyFrameAncestor()
    {
        $this->policy->frame_ancestors = self::AN_ARRAY;

        $this->builder->setFrameAncestors(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->frame_ancestors);
    }

    public function test_addFrameAncestor_addsPolicyFrameAncestor()
    {
        $this->policy->frame_ancestors = self::AN_ARRAY;

        $this->builder->addFrameAncestor(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->frame_ancestors);
    }

    public function test_setReportUri_replacesPolicyReportUri()
    {
        $this->policy->report_uri = self::OLD_URI;

        $this->builder->setReportUri(self::A_URI);

        $this->assertSame(self::A_URI, $this->policy->report_uri);
    }

    public function test_noArgument_setReportOnly_enablesPolicyReportOnly()
    {
        $this->policy->report_only = false;

        $this->builder->setReportOnly();

        $this->assertTrue($this->policy->report_only);
    }

    public function test_argumentFalse_setReportOnly_disablesPolicyReportOnly()
    {
        $this->policy->report_only = true;

        $this->builder->setReportOnly(false);

        $this->assertFalse($this->policy->report_only);
    }

    public function test_noArgument_setBlockAllMixedContent_enablesPolicyBlockAllMixedContent()
    {
        $this->policy->block_all_mixed_content = false;

        $this->builder->setBlockAllMixedContent();

        $this->assertTrue($this->policy->block_all_mixed_content);
    }

    public function test_argumentFalse_setBlockAllMixedContent_disablesPolicyBlockAllMixedContent()
    {
        $this->policy->block_all_mixed_content = true;

        $this->builder->setBlockAllMixedContent(false);

        $this->assertFalse($this->policy->block_all_mixed_content);
    }

    public function test_setRequireSriFor_replacesPolicyRequireSriFor()
    {
        $this->policy->require_sri_for = self::AN_ARRAY;

        $this->builder->setRequireSriFor(self::REPLACEMENT_ARRAY);

        $this->assertSame(self::REPLACEMENT_ARRAY, $this->policy->require_sri_for);
    }

    public function test_addRequireSriFor_addsPolicyRequireSriFor()
    {
        $this->policy->require_sri_for = self::AN_ARRAY;

        $this->builder->addRequireSriFor(self::A_URI);

        $this->assertSame(self::AN_ARRAY_WITH_A_URI, $this->policy->require_sri_for);
    }

    public function test_noArgument_setUpgradeInsecureRequests_enablesPolicyUpgradeInsecureRequests()
    {
        $this->policy->upgrade_insecure_requests = false;

        $this->builder->setUpgradeInsecureRequests();

        $this->assertTrue($this->policy->upgrade_insecure_requests);
    }

    public function test_argumentFalse_setUpgradeInsecureRequests_disablesPolicyUpgradeInsecureRequests()
    {
        $this->policy->upgrade_insecure_requests = true;

        $this->builder->setUpgradeInsecureRequests(false);

        $this->assertFalse($this->policy->upgrade_insecure_requests);
    }
}
