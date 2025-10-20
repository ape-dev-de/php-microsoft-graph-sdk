<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInActivity resources
 *
 * Available select fields:
 * - lastNonInteractiveSignInDateTime
 * - lastNonInteractiveSignInRequestId
 * - lastSignInDateTime
 * - lastSignInRequestId
 * - lastSuccessfulSignInDateTime
 * - lastSuccessfulSignInRequestId
 */
class SignInActivityQueryOptions extends QueryOptions
{
    public const FIELD_LAST_NON_INTERACTIVE_SIGN_IN_DATE_TIME = 'lastNonInteractiveSignInDateTime';
    public const FIELD_LAST_NON_INTERACTIVE_SIGN_IN_REQUEST_ID = 'lastNonInteractiveSignInRequestId';
    public const FIELD_LAST_SIGN_IN_DATE_TIME = 'lastSignInDateTime';
    public const FIELD_LAST_SIGN_IN_REQUEST_ID = 'lastSignInRequestId';
    public const FIELD_LAST_SUCCESSFUL_SIGN_IN_DATE_TIME = 'lastSuccessfulSignInDateTime';
    public const FIELD_LAST_SUCCESSFUL_SIGN_IN_REQUEST_ID = 'lastSuccessfulSignInRequestId';

    /**
     * Select specific SignInActivity properties
     * 
     * @param array<string> $select Use SignInActivityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
