<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
 */
class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
{
    /** Identifier of the resource */
    public ?string $id = null;

    /** Display name of the resource */
    public ?string $displayName = null;

    /** Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy. */
    public ?string $type = null;

    /** Display name of the access package to which access has been granted. */
    public ?string $accessPackageDisplayName = null;

    /** Identifier of the access package to which access has been granted. */
    public ?string $accessPackageId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['accessPackageDisplayName'])) {
            $this->accessPackageDisplayName = $data['accessPackageDisplayName'];
        }
        if (isset($data['accessPackageId'])) {
            $this->accessPackageId = $data['accessPackageId'];
        }
    }
}
