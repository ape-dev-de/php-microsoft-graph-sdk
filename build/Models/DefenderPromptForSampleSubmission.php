<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefenderPromptForSampleSubmission - Enum
 * Possible values for prompting user for samples submission.
 */
enum DefenderPromptForSampleSubmission: string
{
    case USERDEFINED = 'userDefined';
    case ALWAYSPROMPT = 'alwaysPrompt';
    case PROMPTBEFORESENDINGPERSONALDATA = 'promptBeforeSendingPersonalData';
    case NEVERSENDDATA = 'neverSendData';
    case SENDALLDATAWITHOUTPROMPTING = 'sendAllDataWithoutPrompting';
}
