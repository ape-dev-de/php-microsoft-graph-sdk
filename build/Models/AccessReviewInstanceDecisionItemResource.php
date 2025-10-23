<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemResource
 */
class AccessReviewInstanceDecisionItemResource
{
    /** Identifier of the resource */
    public ?string $id = null;

    /** Display name of the resource */
    public ?string $displayName = null;

    /** Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy. */
    public ?string $type = null;


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
    }
}
