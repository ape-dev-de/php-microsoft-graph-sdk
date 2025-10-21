<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionScope
 */
class PermissionScope
{
    public function __construct(
        /** A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences. */
        public ?string $adminConsentDescription = null,
        /** The permission''s title, intended to be read by an administrator granting the permission on behalf of all users. */
        public ?string $adminConsentDisplayName = null,
        /** Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application. */
        public ?string $id = null,
        /** When you create or update a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed. */
        public ?bool $isEnabled = null,
        /**  */
        public ?string $origin = null,
        /** The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications. */
        public ?string $type = null,
        /** A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves. */
        public ?string $userConsentDescription = null,
        /** A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves. */
        public ?string $userConsentDisplayName = null,
        /** Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & '' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, and characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, aren''t allowed. May not begin with .. */
        public ?string $value = null
    ) {}
}
