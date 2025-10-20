<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BitLockerRemovableDrivePolicy resources
 *
 * Available select fields:
 * - blockCrossOrganizationWriteAccess
 * - encryptionMethod
 * - requireEncryptionForWriteAccess
 */
class BitLockerRemovableDrivePolicyQueryOptions extends QueryOptions
{
    public const FIELD_BLOCK_CROSS_ORGANIZATION_WRITE_ACCESS = 'blockCrossOrganizationWriteAccess';
    public const FIELD_ENCRYPTION_METHOD = 'encryptionMethod';
    public const FIELD_REQUIRE_ENCRYPTION_FOR_WRITE_ACCESS = 'requireEncryptionForWriteAccess';

    /**
     * Select specific BitLockerRemovableDrivePolicy properties
     * 
     * @param array<string> $select Use BitLockerRemovableDrivePolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
