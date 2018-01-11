<?php

namespace Kronos\ContentSecurityPolicy;

class Policy
{

    const HEADER_NAME = 'Content-Security-Policy: ';
    const HEADER_NAME_REPORT_ONLY = 'Content-Security-Policy-Report-Only: ';
    const VALUE_SEPARATOR = '; ';

    const FETCH_SELF = "'self'";
    const FETCH_UNSAFE_INLINE = "'unsafe-inline'";
    const FETCH_UNSAFE_EVAL = "'unsafe-eval'";
    const FETCH_NONE = "'none'";
    const FETCH_STRICT_DYNAMIC = "'strict-dynamic'";

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
    public $default_src = [];
    public $child_src = [];
    public $connect_src = [];
    public $font_src = [];
    public $frame_src = [];
    public $img_src = [];
    public $manifest_src = [];
    public $media_src = [];
    public $object_src = [];
    public $script_src = [];
    public $style_src = [];
    public $worker_src = [];

    /* Document directives */
    public $base_uri = [];
    public $plugin_types = [];
    public $sandbox = [];

    /* Navigation directives */
    public $form_action = [];
    public $frame_ancestors = [];

    /* Reporting directives */
    public $report_only = false;
    public $report_uri = '';

    /* Other directives */
    public $block_all_mixed_content = false;
    public $require_sri_for = [];
    public $upgrade_insecure_requests = false;

    public function getHeader()
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
                } elseif ($value === true) {
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
