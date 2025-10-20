<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityMailboxConfigurationEvidence resources
 *
 * Available select fields:
 * - configurationId
 * - configurationType
 * - displayName
 * - externalDirectoryObjectId
 * - mailboxPrimaryAddress
 * - upn
 */
class SecurityMailboxConfigurationEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_CONFIGURATION_ID = 'configurationId';
    public const FIELD_CONFIGURATION_TYPE = 'configurationType';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_DIRECTORY_OBJECT_ID = 'externalDirectoryObjectId';
    public const FIELD_MAILBOX_PRIMARY_ADDRESS = 'mailboxPrimaryAddress';
    public const FIELD_UPN = 'upn';

    /**
     * Select specific SecurityMailboxConfigurationEvidence properties
     * 
     * @param array<string> $select Use SecurityMailboxConfigurationEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
