<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSecret - Enum
 */
enum SynchronizationSecret: string
{
    case NONE = 'None';
    case USERNAME = 'UserName';
    case PASSWORD = 'Password';
    case SECRETTOKEN = 'SecretToken';
    case APPKEY = 'AppKey';
    case BASEADDRESS = 'BaseAddress';
    case CLIENTIDENTIFIER = 'ClientIdentifier';
    case CLIENTSECRET = 'ClientSecret';
    case SINGLESIGNONTYPE = 'SingleSignOnType';
    case SANDBOX = 'Sandbox';
    case URL = 'Url';
    case DOMAIN = 'Domain';
    case CONSUMERKEY = 'ConsumerKey';
    case CONSUMERSECRET = 'ConsumerSecret';
    case TOKENKEY = 'TokenKey';
    case TOKENEXPIRATION = 'TokenExpiration';
    case OAUTH2ACCESSTOKEN = 'Oauth2AccessToken';
    case OAUTH2ACCESSTOKENCREATIONTIME = 'Oauth2AccessTokenCreationTime';
    case OAUTH2REFRESHTOKEN = 'Oauth2RefreshToken';
    case SYNCALL = 'SyncAll';
    case INSTANCENAME = 'InstanceName';
    case OAUTH2CLIENTID = 'Oauth2ClientId';
    case OAUTH2CLIENTSECRET = 'Oauth2ClientSecret';
    case COMPANYID = 'CompanyId';
    case UPDATEKEYONSOFTDELETE = 'UpdateKeyOnSoftDelete';
    case SYNCHRONIZATIONSCHEDULE = 'SynchronizationSchedule';
    case SYSTEMOFRECORD = 'SystemOfRecord';
    case SANDBOXNAME = 'SandboxName';
    case ENFORCEDOMAIN = 'EnforceDomain';
    case SYNCNOTIFICATIONSETTINGS = 'SyncNotificationSettings';
    case SKIPOUTOFSCOPEDELETIONS = 'SkipOutOfScopeDeletions';
    case OAUTH2AUTHORIZATIONCODE = 'Oauth2AuthorizationCode';
    case OAUTH2REDIRECTURI = 'Oauth2RedirectUri';
    case APPLICATIONTEMPLATEIDENTIFIER = 'ApplicationTemplateIdentifier';
    case OAUTH2TOKENEXCHANGEURI = 'Oauth2TokenExchangeUri';
    case OAUTH2AUTHORIZATIONURI = 'Oauth2AuthorizationUri';
    case AUTHENTICATIONTYPE = 'AuthenticationType';
    case SERVER = 'Server';
    case PERFORMINBOUNDENTITLEMENTGRANTS = 'PerformInboundEntitlementGrants';
    case HARDDELETESENABLED = 'HardDeletesEnabled';
    case SYNCAGENTCOMPATIBILITYKEY = 'SyncAgentCompatibilityKey';
    case SYNCAGENTADCONTAINER = 'SyncAgentADContainer';
    case VALIDATEDOMAIN = 'ValidateDomain';
    case TESTREFERENCES = 'TestReferences';
    case CONNECTIONSTRING = 'ConnectionString';
}
