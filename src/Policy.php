<?php

namespace Kronos\ContentSecurityPolicy;

class Policy
{

    const HEADER_NAME = 'Content-Security-Policy: ';
    const HEADER_NAME_REPORT_ONLY = 'Content-Security-Policy-Report-Only: ';
    const VALUE_SEPARATOR = '; ';

    const FETCH_NONE = "'none'";
    const FETCH_REPORT_SAMPLE = "'report-sample'";
    const FETCH_SELF = "'self'";
    const FETCH_STRICT_DYNAMIC = "'strict-dynamic'";
    const FETCH_UNSAFE_INLINE = "'unsafe-inline'";
    const FETCH_UNSAFE_EVAL = "'unsafe-eval'";

    const DOCUMENT_SANDBOX_ALLOW_FORMS = 'allow-forms';
    const DOCUMENT_SANDBOX_ALLOW_MODALS = 'allow-modals';
    const DOCUMENT_SANDBOX_ALLOW_ORIENTATION_LOCK = 'allow-orientation-lock';
    const DOCUMENT_SANDBOX_ALLOW_POINTER_LOCK = 'allow-pointer-lock';
    const DOCUMENT_SANDBOX_ALLOW_POPUPS = 'allow-popups';
    const DOCUMENT_SANDBOX_ALLOW_POPUPS_TO_ESCAPE_SANDBOX = 'allow-popups-to-escape-sandbox';
    const DOCUMENT_SANDBOX_ALLOW_PRESENTATION = 'allow-presentation';
    const DOCUMENT_SANDBOX_ALLOW_SAME_ORIGIN = 'allow-same-origin';
    const DOCUMENT_SANDBOX_ALLOW_SCRIPTS = 'allow-scripts';
    const DOCUMENT_SANDBOX_ALLOW_TOP_NAVIGATION = 'allow-top-navigation';

    const OTHER_REQUIRE_SRI_FOR_SCRIPT = 'script';
    const OTHER_REQUIRE_SRI_FOR_STYLE = 'style';

    /* Fetch directives */
    public array $default_src = [];
    public array $child_src = [];
    public array $connect_src = [];
    public array $font_src = [];
    public array $frame_src = [];
    public array $img_src = [];
    public array $manifest_src = [];
    public array $media_src = [];
    public array $object_src = [];
    public array $script_src = [];
    public array $script_src_elem = [];
    public array $script_src_attr = [];
    public array $style_src = [];
    public array $style_src_elem = [];
    public array $style_src_attr = [];
    public array $worker_src = [];

    /* Document directives */
    public array $base_uri = [];
    public array $plugin_types = [];
    public array $sandbox = [];

    /* Navigation directives */
    public array $form_action = [];
    public array $frame_ancestors = [];

    /* Reporting directives */
    public bool $report_only = false;
    public string $report_uri = '';

    /* Other directives */
    public bool $block_all_mixed_content = false;
    public array $require_sri_for = [];
    public bool $upgrade_insecure_requests = false;

    public function getHeader(): string
    {
        $directives = [];

        $vars = get_object_vars($this);
        foreach ($vars as $var => $value) {
            if ($var === 'report_only') {
                continue;
            }

            $directive = str_replace('_', '-', $var);

            if ($value) {
                if (is_array($value)) {
                    $directives[] = $directive . ' ' . implode(' ', $value);
                } elseif (is_string($value)) {
                    $directives[] = $directive . ' ' . $value;
                } else {
                    $directives[] = $directive;
                }
            }
        }

        if ($directives) {
            $header_name = $this->report_only ? self::HEADER_NAME_REPORT_ONLY : self::HEADER_NAME;
            $header_value = implode(self::VALUE_SEPARATOR, $directives);

            return $header_name . $header_value;
        } else {
            return '';
        }
    }

}
