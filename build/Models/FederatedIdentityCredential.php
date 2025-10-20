<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FederatedIdentityCredential
 */
class FederatedIdentityCredential
{
    /**
     * The audience that can appear in the external token. This field is mandatory and should be set to api://AzureADTokenExchange for Microsoft Entra ID. It says what Microsoft identity platform should accept in the aud claim in the incoming token. This value represents Microsoft Entra ID in your external identity provider and has no fixed value across identity providers - you might need to create a new application registration in your identity provider to serve as the audience of this token. This field can only accept a single value and has a limit of 600 characters. Required.
     */
    private ?string $audiences;

    /**
     * The unvalidated description of the federated identity credential, provided by the user. It has a limit of 600 characters. Optional.
     */
    private ?string $description;

    /**
     * The URL of the external identity provider, which must match the issuer claim of the external token being exchanged. The combination of the values of issuer and subject must be unique within the app. It has a limit of 600 characters. Required.
     */
    private ?string $issuer;

    /**
     * The unique identifier for the federated identity credential, which has a limit of 120 characters and must be URL friendly. The string is immutable after it''s created. Alternate key. Required. Not nullable. Supports $filter (eq).
     */
    private ?string $name;

    /**
     * Required. The identifier of the external software workload within the external identity provider. Like the audience value, it has no fixed format; each identity provider uses their own - sometimes a GUID, sometimes a colon delimited identifier, sometimes arbitrary strings. The value here must match the sub claim within the token presented to Microsoft Entra ID. The combination of issuer and subject must be unique within the app. It has a limit of 600 characters. Supports $filter (eq).
     */
    private ?string $subject;

    public function getAudiences(): ?string
    {
        return $this->audiences;
    }

    public function setAudiences(?string $audiences): self
    {
        $this->audiences = $audiences;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    public function setIssuer(?string $issuer): self
    {
        $this->issuer = $issuer;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

}
