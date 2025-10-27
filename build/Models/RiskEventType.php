<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskEventType - Enum
 */
enum RiskEventType: string
{
    case UNLIKELYTRAVEL = 'unlikelyTravel';
    case ANONYMIZEDIPADDRESS = 'anonymizedIPAddress';
    case MALICIOUSIPADDRESS = 'maliciousIPAddress';
    case UNFAMILIARFEATURES = 'unfamiliarFeatures';
    case MALWAREINFECTEDIPADDRESS = 'malwareInfectedIPAddress';
    case SUSPICIOUSIPADDRESS = 'suspiciousIPAddress';
    case LEAKEDCREDENTIALS = 'leakedCredentials';
    case INVESTIGATIONSTHREATINTELLIGENCE = 'investigationsThreatIntelligence';
    case GENERIC = 'generic';
    case ADMINCONFIRMEDUSERCOMPROMISED = 'adminConfirmedUserCompromised';
    case MCASIMPOSSIBLETRAVEL = 'mcasImpossibleTravel';
    case MCASSUSPICIOUSINBOXMANIPULATIONRULES = 'mcasSuspiciousInboxManipulationRules';
    case INVESTIGATIONSTHREATINTELLIGENCESIGNINLINKED = 'investigationsThreatIntelligenceSigninLinked';
    case MALICIOUSIPADDRESSVALIDCREDENTIALSBLOCKEDIP = 'maliciousIPAddressValidCredentialsBlockedIP';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
