<?php

namespace Kronos\ContentSecurityPolicy;

class Builder
{

    /** @var Policy */
    private $policy;

    /**
     * Builder constructor.
     * @param Policy $policy
     */
    public function __construct(Policy $policy)
    {
        $this->policy = $policy;
    }

    /**
     * @return Policy
     */
    public function getContentSecurityPolicy()
    {
        return $this->policy;
    }

    /**
     * @param array $default_src
     */
    public function setDefaultSrc(array $default_src = [])
    {
        $this->policy->default_src = $default_src;
    }

    /**
     * @param string $default_src
     */
    public function addDefaultSrc($default_src)
    {
        $this->policy->default_src[] = $default_src;
    }

    /**
     * @param array $child_src
     */
    public function setChildSrc(array $child_src = [])
    {
        $this->policy->child_src = $child_src;
    }

    /**
     * @param string $child_src
     */
    public function addChildSrc($child_src)
    {
        $this->policy->child_src[] = $child_src;
    }

    /**
     * @param array $connect_src
     */
    public function setConnectSrc(array $connect_src = [])
    {
        $this->policy->connect_src = $connect_src;
    }

    /**
     * @param string $connect_src
     */
    public function addConnectSrc($connect_src)
    {
        $this->policy->connect_src[] = $connect_src;
    }

    /**
     * @param array $font_src
     */
    public function setFontSrc(array $font_src = [])
    {
        $this->policy->font_src = $font_src;
    }

    /**
     * @param string $font_src
     */
    public function addFontSrc($font_src)
    {
        $this->policy->font_src[] = $font_src;
    }

    /**
     * @param array $frame_src
     */
    public function setFrameSrc(array $frame_src = [])
    {
        $this->policy->frame_src = $frame_src;
    }

    /**
     * @param string $frame_src
     */
    public function addFrameSrc($frame_src)
    {
        $this->policy->frame_src[] = $frame_src;
    }

    /**
     * @param array $img_src
     */
    public function setImgSrc(array $img_src = [])
    {
        $this->policy->img_src = $img_src;
    }

    /**
     * @param string $img_src
     */
    public function addImgSrc($img_src)
    {
        $this->policy->img_src[] = $img_src;
    }

    /**
     * @param array $manifest_src
     */
    public function setManifestSrc(array $manifest_src = [])
    {
        $this->policy->manifest_src = $manifest_src;
    }

    /**
     * @param string $manifest_src
     */
    public function addManifestSrc($manifest_src)
    {
        $this->policy->manifest_src[] = $manifest_src;
    }

    /**
     * @param array $media_src
     */
    public function setMediaSrc(array $media_src = [])
    {
        $this->policy->media_src = $media_src;
    }

    /**
     * @param string $media_src
     */
    public function addMediaSrc($media_src)
    {
        $this->policy->media_src[] = $media_src;
    }

    /**
     * @param array $object_src
     */
    public function setObjectSrc(array $object_src = [])
    {
        $this->policy->object_src = $object_src;
    }

    /**
     * @param string $object_src
     */
    public function addObjectSrc($object_src)
    {
        $this->policy->object_src[] = $object_src;
    }

    /**
     * @param array $script_src
     */
    public function setScriptSrc(array $script_src = [])
    {
        $this->policy->script_src = $script_src;
    }

    /**
     * @param string $script_src
     */
    public function addScriptSrc($script_src)
    {
        $this->policy->script_src[] = $script_src;
    }

    /**
     * @param array $script_src_elem
     */
    public function setScriptSrcElem(array $script_src_elem = [])
    {
        $this->policy->script_src_elem = $script_src_elem;
    }

    /**
     * @param string $script_src_elem
     */
    public function addScriptSrcElem($script_src_elem)
    {
        $this->policy->script_src_elem[] = $script_src_elem;
    }

    /**
     * @param array $script_src_attr
     */
    public function setScriptSrcAttr(array $script_src_attr = [])
    {
        $this->policy->script_src_attr = $script_src_attr;
    }

    /**
     * @param string $script_src_attr
     */
    public function addScriptSrcAttr($script_src_attr)
    {
        $this->policy->script_src_attr[] = $script_src_attr;
    }

    /**
     * @param array $style_src
     */
    public function setStyleSrc(array $style_src = [])
    {
        $this->policy->style_src = $style_src;
    }

    /**
     * @param string $style_src
     */
    public function addStyleSrc($style_src)
    {
        $this->policy->style_src[] = $style_src;
    }

    /**
     * @param array $style_src_elem
     */
    public function setStyleSrcElem(array $style_src_elem = [])
    {
        $this->policy->style_src_elem = $style_src_elem;
    }

    /**
     * @param string $style_src_elem
     */
    public function addStyleSrcElem($style_src_elem)
    {
        $this->policy->style_src_elem[] = $style_src_elem;
    }

    /**
     * @param array $style_src_attr
     */
    public function setStyleSrcAttr(array $style_src_attr = [])
    {
        $this->policy->style_src_attr = $style_src_attr;
    }

    /**
     * @param string $style_src_attr
     */
    public function addStyleSrcAttr($style_src_attr)
    {
        $this->policy->style_src_attr[] = $style_src_attr;
    }

    /**
     * @param array $worker_src
     */
    public function setWorkerSrc(array $worker_src = [])
    {
        $this->policy->worker_src = $worker_src;
    }

    /**
     * @param string $worker_src
     */
    public function addWorkerSrc($worker_src)
    {
        $this->policy->worker_src[] = $worker_src;
    }

    /**
     * @param array $base_uri
     */
    public function setBaseUri(array $base_uri = [])
    {
        $this->policy->base_uri = $base_uri;
    }

    /**
     * @param string $base_uri
     */
    public function addBaseUri($base_uri)
    {
        $this->policy->base_uri[] = $base_uri;
    }

    /**
     * @param array $plugin_types
     */
    public function setPluginTypes(array $plugin_types = [])
    {
        $this->policy->plugin_types = $plugin_types;
    }

    /**
     * @param string $plugin_types
     */
    public function addPluginType($plugin_types)
    {
        $this->policy->plugin_types[] = $plugin_types;
    }

    /**
     * @param array $sandbox
     */
    public function setSandboxDirectives(array $sandbox = [])
    {
        $this->policy->sandbox = $sandbox;
    }

    /**
     * @param string $sandbox
     */
    public function addSandboxDirective($sandbox)
    {
        $this->policy->sandbox[] = $sandbox;
    }

    /**
     * @param array $form_action
     */
    public function setFormAction(array $form_action = [])
    {
        $this->policy->form_action = $form_action;
    }

    /**
     * @param string $form_action
     */
    public function addFormAction($form_action)
    {
        $this->policy->form_action[] = $form_action;
    }

    /**
     * @param array $frame_ancestors
     */
    public function setFrameAncestors(array $frame_ancestors = [])
    {
        $this->policy->frame_ancestors = $frame_ancestors;
    }

    /**
     * @param string $frame_ancestors
     */
    public function addFrameAncestor($frame_ancestors)
    {
        $this->policy->frame_ancestors[] = $frame_ancestors;
    }

    /**
     * @param string $report_uri
     */
    public function setReportUri($report_uri)
    {
        $this->policy->report_uri = $report_uri;
    }

    /**
     * @param bool $report_only
     */
    public function setReportOnly($report_only = true)
    {
        $this->policy->report_only = $report_only;
    }

    /**
     * @param bool $block_all_mixed_content
     */
    public function setBlockAllMixedContent($block_all_mixed_content = true)
    {
        $this->policy->block_all_mixed_content = $block_all_mixed_content;
    }

    /**
     * @param array $require_sri_for
     */
    public function setRequireSriFor(array $require_sri_for)
    {
        $this->policy->require_sri_for = $require_sri_for;
    }

    /**
     * @param string $require_sri_for
     */
    public function addRequireSriFor($require_sri_for)
    {
        $this->policy->require_sri_for[] = $require_sri_for;
    }

    /**
     * @param bool $upgrade_insecure_requests
     */
    public function setUpgradeInsecureRequests($upgrade_insecure_requests = true)
    {
        $this->policy->upgrade_insecure_requests = $upgrade_insecure_requests;
    }

}
