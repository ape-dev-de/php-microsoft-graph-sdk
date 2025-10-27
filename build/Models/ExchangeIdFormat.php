<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeIdFormat - Enum
 */
enum ExchangeIdFormat: string
{
    case ENTRYID = 'entryId';
    case EWSID = 'ewsId';
    case IMMUTABLEENTRYID = 'immutableEntryId';
    case RESTID = 'restId';
    case RESTIMMUTABLEENTRYID = 'restImmutableEntryId';
}
