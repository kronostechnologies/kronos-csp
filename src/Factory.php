<?php

namespace Kronos\ContentSecurityPolicy;

class Factory
{

    /**
     * @return Builder
     */
    public function createContentSecurityPolicyBuilder()
    {
        $policy = $this->createContentSecurityPolicyDTO();
        return new Builder($policy);
    }

    /**
     * @return Policy
     */
    protected function createContentSecurityPolicyDTO()
    {
        return new Policy();
    }

}