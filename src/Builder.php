<?php

namespace Kronos\ContentSecurityPolicy;

class Builder
{

    private Policy $policy;

    public function __construct(Policy $policy)
    {
        $this->policy = $policy;
    }

    public function getContentSecurityPolicy(): Policy
    {
        return $this->policy;
    }

    public function setDefaultSrc(array $default_src = [])
    {
        $this->policy->default_src = $default_src;
    }

    public function addDefaultSrc(string $default_src)
    {
        $this->policy->default_src[] = $default_src;
    }

    public function setChildSrc(array $child_src = [])
    {
        $this->policy->child_src = $child_src;
    }

    public function addChildSrc(string $child_src)
    {
        $this->policy->child_src[] = $child_src;
    }

    public function setConnectSrc(array $connect_src = [])
    {
        $this->policy->connect_src = $connect_src;
    }

    public function addConnectSrc(string $connect_src)
    {
        $this->policy->connect_src[] = $connect_src;
    }

    public function setFontSrc(array $font_src = [])
    {
        $this->policy->font_src = $font_src;
    }

    public function addFontSrc(string $font_src)
    {
        $this->policy->font_src[] = $font_src;
    }

    public function setFrameSrc(array $frame_src = [])
    {
        $this->policy->frame_src = $frame_src;
    }

    public function addFrameSrc(string $frame_src)
    {
        $this->policy->frame_src[] = $frame_src;
    }

    public function setImgSrc(array $img_src = [])
    {
        $this->policy->img_src = $img_src;
    }

    public function addImgSrc(string $img_src)
    {
        $this->policy->img_src[] = $img_src;
    }

    public function setManifestSrc(array $manifest_src = [])
    {
        $this->policy->manifest_src = $manifest_src;
    }

    public function addManifestSrc(string $manifest_src)
    {
        $this->policy->manifest_src[] = $manifest_src;
    }

    public function setMediaSrc(array $media_src = [])
    {
        $this->policy->media_src = $media_src;
    }

    public function addMediaSrc(string $media_src)
    {
        $this->policy->media_src[] = $media_src;
    }

    public function setObjectSrc(array $object_src = [])
    {
        $this->policy->object_src = $object_src;
    }

    public function addObjectSrc(string $object_src)
    {
        $this->policy->object_src[] = $object_src;
    }

    public function setScriptSrc(array $script_src = [])
    {
        $this->policy->script_src = $script_src;
    }

    public function addScriptSrc(string $script_src)
    {
        $this->policy->script_src[] = $script_src;
    }

    public function setScriptSrcElem(array $script_src_elem = [])
    {
        $this->policy->script_src_elem = $script_src_elem;
    }

    public function addScriptSrcElem(string $script_src_elem)
    {
        $this->policy->script_src_elem[] = $script_src_elem;
    }

    public function setScriptSrcAttr(array $script_src_attr = [])
    {
        $this->policy->script_src_attr = $script_src_attr;
    }

    public function addScriptSrcAttr(string $script_src_attr)
    {
        $this->policy->script_src_attr[] = $script_src_attr;
    }

    public function setStyleSrc(array $style_src = [])
    {
        $this->policy->style_src = $style_src;
    }

    public function addStyleSrc(string $style_src)
    {
        $this->policy->style_src[] = $style_src;
    }

    public function setStyleSrcElem(array $style_src_elem = [])
    {
        $this->policy->style_src_elem = $style_src_elem;
    }

    public function addStyleSrcElem(string $style_src_elem)
    {
        $this->policy->style_src_elem[] = $style_src_elem;
    }

    public function setStyleSrcAttr(array $style_src_attr = [])
    {
        $this->policy->style_src_attr = $style_src_attr;
    }

    public function addStyleSrcAttr(string $style_src_attr)
    {
        $this->policy->style_src_attr[] = $style_src_attr;
    }

    public function setWorkerSrc(array $worker_src = [])
    {
        $this->policy->worker_src = $worker_src;
    }

    public function addWorkerSrc(string $worker_src)
    {
        $this->policy->worker_src[] = $worker_src;
    }

    public function setBaseUri(array $base_uri = [])
    {
        $this->policy->base_uri = $base_uri;
    }

    public function addBaseUri(string $base_uri)
    {
        $this->policy->base_uri[] = $base_uri;
    }

    public function setPluginTypes(array $plugin_types = [])
    {
        $this->policy->plugin_types = $plugin_types;
    }

    public function addPluginType(string $plugin_types)
    {
        $this->policy->plugin_types[] = $plugin_types;
    }

    public function setSandboxDirectives(array $sandbox = [])
    {
        $this->policy->sandbox = $sandbox;
    }

    public function addSandboxDirective(string $sandbox)
    {
        $this->policy->sandbox[] = $sandbox;
    }

    public function setFormAction(array $form_action = [])
    {
        $this->policy->form_action = $form_action;
    }

    public function addFormAction(string $form_action)
    {
        $this->policy->form_action[] = $form_action;
    }

    public function setFrameAncestors(array $frame_ancestors = [])
    {
        $this->policy->frame_ancestors = $frame_ancestors;
    }

    public function addFrameAncestor(string $frame_ancestors)
    {
        $this->policy->frame_ancestors[] = $frame_ancestors;
    }

    public function setReportUri(string $report_uri)
    {
        $this->policy->report_uri = $report_uri;
    }

    public function setReportOnly(bool $report_only = true)
    {
        $this->policy->report_only = $report_only;
    }

    public function setBlockAllMixedContent(bool $block_all_mixed_content = true)
    {
        $this->policy->block_all_mixed_content = $block_all_mixed_content;
    }

    public function setRequireSriFor(array $require_sri_for)
    {
        $this->policy->require_sri_for = $require_sri_for;
    }

    public function addRequireSriFor(string $require_sri_for)
    {
        $this->policy->require_sri_for[] = $require_sri_for;
    }

    public function setUpgradeInsecureRequests(bool $upgrade_insecure_requests = true)
    {
        $this->policy->upgrade_insecure_requests = $upgrade_insecure_requests;
    }

}
