<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotificationMessageTemplate
 */
class NotificationMessageTemplate
{
    /**
     */
    private ?string $brandingOptions;

    /**
     * The default locale to fallback onto when the requested locale is not available.
     */
    private ?string $defaultLocale;

    /**
     * Display name for the Notification Message Template.
     */
    private ?string $displayName;

    /**
     * DateTime the object was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * List of Scope Tags for this Entity instance.
     */
    private ?string $roleScopeTagIds;

    /**
     * Notification messages are messages that are sent to end users who are determined to be not-compliant with the compliance policies defined by the administrator. Administrators choose notifications and configure them in the Intune Admin Console using the compliance policy creation page under the “Actions for non-compliance” section. Use the notificationMessageTemplate object to create your own custom notifications for administrators to choose while configuring actions for non-compliance.
     */
    private ?string $localizedNotificationMessages;

    public function getBrandingOptions(): ?string
    {
        return $this->brandingOptions;
    }

    public function setBrandingOptions(?string $brandingOptions): self
    {
        $this->brandingOptions = $brandingOptions;
        return $this;
    }

    public function getDefaultLocale(): ?string
    {
        return $this->defaultLocale;
    }

    public function setDefaultLocale(?string $defaultLocale): self
    {
        $this->defaultLocale = $defaultLocale;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getRoleScopeTagIds(): ?string
    {
        return $this->roleScopeTagIds;
    }

    public function setRoleScopeTagIds(?string $roleScopeTagIds): self
    {
        $this->roleScopeTagIds = $roleScopeTagIds;
        return $this;
    }

    public function getLocalizedNotificationMessages(): ?string
    {
        return $this->localizedNotificationMessages;
    }

    public function setLocalizedNotificationMessages(?string $localizedNotificationMessages): self
    {
        $this->localizedNotificationMessages = $localizedNotificationMessages;
        return $this;
    }

}
