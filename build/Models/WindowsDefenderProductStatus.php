<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDefenderProductStatus - Enum
 * Product Status of Windows Defender
 */
enum WindowsDefenderProductStatus: string
{
    case NOSTATUS = 'noStatus';
    case SERVICENOTRUNNING = 'serviceNotRunning';
    case SERVICESTARTEDWITHOUTMALWAREPROTECTION = 'serviceStartedWithoutMalwareProtection';
    case PENDINGFULLSCANDUETOTHREATACTION = 'pendingFullScanDueToThreatAction';
    case PENDINGREBOOTDUETOTHREATACTION = 'pendingRebootDueToThreatAction';
    case PENDINGMANUALSTEPSDUETOTHREATACTION = 'pendingManualStepsDueToThreatAction';
    case AVSIGNATURESOUTOFDATE = 'avSignaturesOutOfDate';
    case ASSIGNATURESOUTOFDATE = 'asSignaturesOutOfDate';
    case NOQUICKSCANHAPPENEDFORSPECIFIEDPERIOD = 'noQuickScanHappenedForSpecifiedPeriod';
    case NOFULLSCANHAPPENEDFORSPECIFIEDPERIOD = 'noFullScanHappenedForSpecifiedPeriod';
    case SYSTEMINITIATEDSCANINPROGRESS = 'systemInitiatedScanInProgress';
    case SYSTEMINITIATEDCLEANINPROGRESS = 'systemInitiatedCleanInProgress';
    case SAMPLESPENDINGSUBMISSION = 'samplesPendingSubmission';
    case PRODUCTRUNNINGINEVALUATIONMODE = 'productRunningInEvaluationMode';
    case PRODUCTRUNNINGINNONGENUINEMODE = 'productRunningInNonGenuineMode';
    case PRODUCTEXPIRED = 'productExpired';
    case OFFLINESCANREQUIRED = 'offlineScanRequired';
    case SERVICESHUTDOWNASPARTOFSYSTEMSHUTDOWN = 'serviceShutdownAsPartOfSystemShutdown';
    case THREATREMEDIATIONFAILEDCRITICALLY = 'threatRemediationFailedCritically';
    case THREATREMEDIATIONFAILEDNONCRITICALLY = 'threatRemediationFailedNonCritically';
    case NOSTATUSFLAGSSET = 'noStatusFlagsSet';
    case PLATFORMOUTOFDATE = 'platformOutOfDate';
    case PLATFORMUPDATEINPROGRESS = 'platformUpdateInProgress';
    case PLATFORMABOUTTOBEOUTDATED = 'platformAboutToBeOutdated';
    case SIGNATUREORPLATFORMENDOFLIFEISPASTORISIMPENDING = 'signatureOrPlatformEndOfLifeIsPastOrIsImpending';
    case WINDOWSSMODESIGNATURESINUSEONNONWIN10SINSTALL = 'windowsSModeSignaturesInUseOnNonWin10SInstall';
}
