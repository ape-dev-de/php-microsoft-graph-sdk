<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrereleaseFeatures - Enum
 * Possible values for pre-release features.
 */
enum PrereleaseFeatures: string
{
    case USERDEFINED = 'userDefined';
    case SETTINGSONLY = 'settingsOnly';
    case SETTINGSANDEXPERIMENTATIONS = 'settingsAndExperimentations';
    case NOTALLOWED = 'notAllowed';
}
