<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectIdentity
 */
class ObjectIdentity
{
    /**
     * Specifies the issuer of the identity, for example facebook.com. 512 character limit. For local accounts (where signInType isn''t federated), this property is the local default domain name for the tenant, for example contoso.com.  For guests from other Microsoft Entra organizations, this is the domain of the federated organization, for example contoso.com. For more information about filtering behavior for this property, see Filtering on the identities property of a user.
     */
    private ?string $issuer;

    /**
     * Specifies the unique identifier assigned to the user by the issuer. 64 character limit. The combination of issuer and issuerAssignedId must be unique within the organization. Represents the sign-in name for the user, when signInType is set to emailAddress or userName (also known as local accounts).When signInType is set to: emailAddress (or a custom string that starts with emailAddress like emailAddress1), issuerAssignedId must be a valid email addressuserName, issuerAssignedId must begin with an alphabetical character or number, and can only contain alphanumeric characters and the following symbols: - or _  For more information about filtering behavior for this property, see Filtering on the identities property of a user.
     */
    private ?string $issuerAssignedId;

    /**
     * Specifies the user sign-in types in your directory, such as emailAddress, userName, federated, or userPrincipalName. federated represents a unique identifier for a user from an issuer that can be in any format chosen by the issuer. Setting or updating a userPrincipalName identity updates the value of the userPrincipalName property on the user object. The validations performed on the userPrincipalName property on the user object, for example, verified domains and acceptable characters, are performed when setting or updating a userPrincipalName identity. Extra validation is enforced on issuerAssignedId when the sign-in type is set to emailAddress or userName. This property can also be set to any custom string.  For more information about filtering behavior for this property, see Filtering on the identities property of a user.
     */
    private ?string $signInType;

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    public function setIssuer(?string $issuer): self
    {
        $this->issuer = $issuer;
        return $this;
    }

    public function getIssuerAssignedId(): ?string
    {
        return $this->issuerAssignedId;
    }

    public function setIssuerAssignedId(?string $issuerAssignedId): self
    {
        $this->issuerAssignedId = $issuerAssignedId;
        return $this;
    }

    public function getSignInType(): ?string
    {
        return $this->signInType;
    }

    public function setSignInType(?string $signInType): self
    {
        $this->signInType = $signInType;
        return $this;
    }

}
