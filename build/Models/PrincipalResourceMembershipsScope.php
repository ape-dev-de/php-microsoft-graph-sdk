<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrincipalResourceMembershipsScope
 */
class PrincipalResourceMembershipsScope
{
    /** 
     * Defines the scopes of the principals whose access to resources are reviewed in the access review.
     * @var AccessReviewScope[]
     */
    public array $principalScopes = [];

    /** 
     * Defines the scopes of the resources for which access is reviewed.
     * @var AccessReviewScope[]
     */
    public array $resourceScopes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['principalScopes'])) {
            $this->principalScopes = $data['principalScopes'];
        }
        if (isset($data['resourceScopes'])) {
            $this->resourceScopes = $data['resourceScopes'];
        }
    }
}
