<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordCredential resources
 *
 * Available select fields:
 * - customKeyIdentifier
 * - displayName
 * - endDateTime
 * - hint
 * - keyId
 * - secretText
 * - startDateTime
 */
class PasswordCredentialQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PasswordCredential
     */
    public const FIELD_CUSTOM_KEY_IDENTIFIER = 'customKeyIdentifier';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_HINT = 'hint';
    public const FIELD_KEY_ID = 'keyId';
    public const FIELD_SECRET_TEXT = 'secretText';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific PasswordCredential properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
