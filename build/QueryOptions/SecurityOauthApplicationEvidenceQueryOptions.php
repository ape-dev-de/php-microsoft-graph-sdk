<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityOauthApplicationEvidence resources
 *
 * Available select fields:
 * - appId
 * - displayName
 * - objectId
 * - publisher
 */
class SecurityOauthApplicationEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_APP_ID = 'appId';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_OBJECT_ID = 'objectId';
    public const FIELD_PUBLISHER = 'publisher';

    /**
     * Select specific SecurityOauthApplicationEvidence properties
     * 
     * @param array<string> $select Use SecurityOauthApplicationEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
