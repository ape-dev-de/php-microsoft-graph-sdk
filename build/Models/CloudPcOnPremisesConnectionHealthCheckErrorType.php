<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionHealthCheckErrorType - Enum
 */
enum CloudPcOnPremisesConnectionHealthCheckErrorType: string
{
    case DNSCHECKFQDNNOTFOUND = 'dnsCheckFqdnNotFound';
    case DNSCHECKNAMEWITHINVALIDCHARACTER = 'dnsCheckNameWithInvalidCharacter';
    case DNSCHECKUNKNOWNERROR = 'dnsCheckUnknownError';
    case ADJOINCHECKFQDNNOTFOUND = 'adJoinCheckFqdnNotFound';
    case ADJOINCHECKINCORRECTCREDENTIALS = 'adJoinCheckIncorrectCredentials';
    case ADJOINCHECKORGANIZATIONALUNITNOTFOUND = 'adJoinCheckOrganizationalUnitNotFound';
    case ADJOINCHECKORGANIZATIONALUNITINCORRECTFORMAT = 'adJoinCheckOrganizationalUnitIncorrectFormat';
    case ADJOINCHECKCOMPUTEROBJECTALREADYEXISTS = 'adJoinCheckComputerObjectAlreadyExists';
    case ADJOINCHECKACCESSDENIED = 'adJoinCheckAccessDenied';
    case ADJOINCHECKCREDENTIALSEXPIRED = 'adJoinCheckCredentialsExpired';
    case ADJOINCHECKACCOUNTLOCKEDORDISABLED = 'adJoinCheckAccountLockedOrDisabled';
    case ADJOINCHECKACCOUNTQUOTAEXCEEDED = 'adJoinCheckAccountQuotaExceeded';
    case ADJOINCHECKSERVERNOTOPERATIONAL = 'adJoinCheckServerNotOperational';
    case ADJOINCHECKUNKNOWNERROR = 'adJoinCheckUnknownError';
    case ENDPOINTCONNECTIVITYCHECKCLOUDPCURLNOTALLOWLISTED = 'endpointConnectivityCheckCloudPcUrlNotAllowListed';
    case ENDPOINTCONNECTIVITYCHECKWVDURLNOTALLOWLISTED = 'endpointConnectivityCheckWVDUrlNotAllowListed';
    case ENDPOINTCONNECTIVITYCHECKINTUNEURLNOTALLOWLISTED = 'endpointConnectivityCheckIntuneUrlNotAllowListed';
    case ENDPOINTCONNECTIVITYCHECKAZUREADURLNOTALLOWLISTED = 'endpointConnectivityCheckAzureADUrlNotAllowListed';
    case ENDPOINTCONNECTIVITYCHECKLOCALEURLNOTALLOWLISTED = 'endpointConnectivityCheckLocaleUrlNotAllowListed';
    case ENDPOINTCONNECTIVITYCHECKUNKNOWNERROR = 'endpointConnectivityCheckUnknownError';
    case AZUREADDEVICESYNCCHECKDEVICENOTFOUND = 'azureAdDeviceSyncCheckDeviceNotFound';
    case AZUREADDEVICESYNCCHECKLONGSYNCCIRCLE = 'azureAdDeviceSyncCheckLongSyncCircle';
    case AZUREADDEVICESYNCCHECKCONNECTDISABLED = 'azureAdDeviceSyncCheckConnectDisabled';
    case AZUREADDEVICESYNCCHECKDURATIONEXCEEDED = 'azureAdDeviceSyncCheckDurationExceeded';
    case AZUREADDEVICESYNCCHECKSCPNOTCONFIGURED = 'azureAdDeviceSyncCheckScpNotConfigured';
    case AZUREADDEVICESYNCCHECKTRANSIENTSERVICEERROR = 'azureAdDeviceSyncCheckTransientServiceError';
    case AZUREADDEVICESYNCCHECKUNKNOWNERROR = 'azureAdDeviceSyncCheckUnknownError';
    case RESOURCEAVAILABILITYCHECKNOSUBNETIP = 'resourceAvailabilityCheckNoSubnetIP';
    case RESOURCEAVAILABILITYCHECKSUBSCRIPTIONDISABLED = 'resourceAvailabilityCheckSubscriptionDisabled';
    case RESOURCEAVAILABILITYCHECKAZUREPOLICYVIOLATION = 'resourceAvailabilityCheckAzurePolicyViolation';
    case RESOURCEAVAILABILITYCHECKSUBSCRIPTIONNOTFOUND = 'resourceAvailabilityCheckSubscriptionNotFound';
    case RESOURCEAVAILABILITYCHECKSUBSCRIPTIONTRANSFERRED = 'resourceAvailabilityCheckSubscriptionTransferred';
    case RESOURCEAVAILABILITYCHECKGENERALSUBSCRIPTIONERROR = 'resourceAvailabilityCheckGeneralSubscriptionError';
    case RESOURCEAVAILABILITYCHECKUNSUPPORTEDVNETREGION = 'resourceAvailabilityCheckUnsupportedVNetRegion';
    case RESOURCEAVAILABILITYCHECKRESOURCEGROUPINVALID = 'resourceAvailabilityCheckResourceGroupInvalid';
    case RESOURCEAVAILABILITYCHECKVNETINVALID = 'resourceAvailabilityCheckVNetInvalid';
    case RESOURCEAVAILABILITYCHECKSUBNETINVALID = 'resourceAvailabilityCheckSubnetInvalid';
    case RESOURCEAVAILABILITYCHECKRESOURCEGROUPBEINGDELETED = 'resourceAvailabilityCheckResourceGroupBeingDeleted';
    case RESOURCEAVAILABILITYCHECKVNETBEINGMOVED = 'resourceAvailabilityCheckVNetBeingMoved';
    case RESOURCEAVAILABILITYCHECKSUBNETDELEGATIONFAILED = 'resourceAvailabilityCheckSubnetDelegationFailed';
    case RESOURCEAVAILABILITYCHECKSUBNETWITHEXTERNALRESOURCES = 'resourceAvailabilityCheckSubnetWithExternalResources';
    case RESOURCEAVAILABILITYCHECKRESOURCEGROUPLOCKEDFORREADONLY = 'resourceAvailabilityCheckResourceGroupLockedForReadonly';
    case RESOURCEAVAILABILITYCHECKRESOURCEGROUPLOCKEDFORDELETE = 'resourceAvailabilityCheckResourceGroupLockedForDelete';
    case RESOURCEAVAILABILITYCHECKNOINTUNEREADERROLEERROR = 'resourceAvailabilityCheckNoIntuneReaderRoleError';
    case RESOURCEAVAILABILITYCHECKINTUNEDEFAULTWINDOWSRESTRICTIONVIOLATION = 'resourceAvailabilityCheckIntuneDefaultWindowsRestrictionViolation';
    case RESOURCEAVAILABILITYCHECKINTUNECUSTOMWINDOWSRESTRICTIONVIOLATION = 'resourceAvailabilityCheckIntuneCustomWindowsRestrictionViolation';
    case RESOURCEAVAILABILITYCHECKDEPLOYMENTQUOTALIMITREACHED = 'resourceAvailabilityCheckDeploymentQuotaLimitReached';
    case RESOURCEAVAILABILITYCHECKTRANSIENTSERVICEERROR = 'resourceAvailabilityCheckTransientServiceError';
    case RESOURCEAVAILABILITYCHECKUNKNOWNERROR = 'resourceAvailabilityCheckUnknownError';
    case PERMISSIONCHECKNOSUBSCRIPTIONREADERROLE = 'permissionCheckNoSubscriptionReaderRole';
    case PERMISSIONCHECKNORESOURCEGROUPOWNERROLE = 'permissionCheckNoResourceGroupOwnerRole';
    case PERMISSIONCHECKNOVNETCONTRIBUTORROLE = 'permissionCheckNoVNetContributorRole';
    case PERMISSIONCHECKNORESOURCEGROUPNETWORKCONTRIBUTORROLE = 'permissionCheckNoResourceGroupNetworkContributorRole';
    case PERMISSIONCHECKNOWINDOWS365NETWORKUSERROLE = 'permissionCheckNoWindows365NetworkUserRole';
    case PERMISSIONCHECKNOWINDOWS365NETWORKINTERFACECONTRIBUTORROLE = 'permissionCheckNoWindows365NetworkInterfaceContributorRole';
    case PERMISSIONCHECKTRANSIENTSERVICEERROR = 'permissionCheckTransientServiceError';
    case PERMISSIONCHECKUNKNOWNERROR = 'permissionCheckUnknownError';
    case UDPCONNECTIVITYCHECKSTUNURLNOTALLOWLISTED = 'udpConnectivityCheckStunUrlNotAllowListed';
    case UDPCONNECTIVITYCHECKTURNURLNOTALLOWLISTED = 'udpConnectivityCheckTurnUrlNotAllowListed';
    case UDPCONNECTIVITYCHECKURLSNOTALLOWLISTED = 'udpConnectivityCheckUrlsNotAllowListed';
    case UDPCONNECTIVITYCHECKUNKNOWNERROR = 'udpConnectivityCheckUnknownError';
    case INTERNALSERVERERRORDEPLOYMENTCANCELED = 'internalServerErrorDeploymentCanceled';
    case INTERNALSERVERERRORALLOCATERESOURCEFAILED = 'internalServerErrorAllocateResourceFailed';
    case INTERNALSERVERERRORVMDEPLOYMENTTIMEOUT = 'internalServerErrorVMDeploymentTimeout';
    case INTERNALSERVERERRORUNABLETORUNDSCSCRIPT = 'internalServerErrorUnableToRunDscScript';
    case SSOCHECKKERBEROSCONFIGURATIONERROR = 'ssoCheckKerberosConfigurationError';
    case INTERNALSERVERUNKNOWNERROR = 'internalServerUnknownError';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
