<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentRequest
 */
class AppConsentRequest
{
    /**
     * The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby.
     */
    private ?string $appDisplayName;

    /**
     * The identifier of the application. Required. Supports $filter (eq only) and $orderby.
     */
    private ?string $appId;

    /**
     * A list of pending scopes waiting for approval. Required.
     */
    private array $pendingScopes = [];

    /**
     * A list of pending user consent requests. Supports $filter (eq).
     * @var string[]
     */
    private array $userConsentRequests = [];


    public function getAppDisplayName(): ?string
    {
        return $this->appDisplayName;
    }

    public function setAppDisplayName(?string $appDisplayName): self
    {
        $this->appDisplayName = $appDisplayName;
        return $this;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getPendingScopes(): array
    {
        return $this->pendingScopes;
    }

    public function setPendingScopes(array $pendingScopes): self
    {
        $this->pendingScopes = $pendingScopes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUserConsentRequests(): array
    {
        return $this->userConsentRequests;
    }

    /**
     * @param string[] $userConsentRequests
     */
    public function setUserConsentRequests(array $userConsentRequests): self
    {
        $this->userConsentRequests = $userConsentRequests;
        return $this;
    }

}
