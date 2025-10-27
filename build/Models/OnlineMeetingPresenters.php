<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingPresenters - Enum
 */
enum OnlineMeetingPresenters: string
{
    case EVERYONE = 'everyone';
    case ORGANIZATION = 'organization';
    case ROLEISPRESENTER = 'roleIsPresenter';
    case ORGANIZER = 'organizer';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
