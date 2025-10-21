<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsFirewallNetworkProfile
 */
class WindowsFirewallNetworkProfile
{
    /**
     * Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     */
    private ?bool $authorizedApplicationRulesFromGroupPolicyMerged;

    /**
     * Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     */
    private ?bool $connectionSecurityRulesFromGroupPolicyMerged;

    /**
     */
    private ?string $firewallEnabled;

    /**
     * Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     */
    private ?bool $globalPortRulesFromGroupPolicyMerged;

    /**
     * Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     */
    private ?bool $inboundConnectionsBlocked;

    /**
     * Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     */
    private ?bool $inboundNotificationsBlocked;

    /**
     * Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     */
    private ?bool $incomingTrafficBlocked;

    /**
     * Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     */
    private ?bool $outboundConnectionsBlocked;

    /**
     * Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     */
    private ?bool $policyRulesFromGroupPolicyMerged;

    /**
     * Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     */
    private ?bool $securedPacketExemptionAllowed;

    /**
     * Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     */
    private ?bool $stealthModeBlocked;

    /**
     * Windows Firewall Profile Policies.
     */
    private ?string $unicastResponsesToMulticastBroadcastsBlocked;


    public function getAuthorizedApplicationRulesFromGroupPolicyMerged(): ?bool
    {
        return $this->authorizedApplicationRulesFromGroupPolicyMerged;
    }

    public function setAuthorizedApplicationRulesFromGroupPolicyMerged(?bool $authorizedApplicationRulesFromGroupPolicyMerged): self
    {
        $this->authorizedApplicationRulesFromGroupPolicyMerged = $authorizedApplicationRulesFromGroupPolicyMerged;
        return $this;
    }

    public function getConnectionSecurityRulesFromGroupPolicyMerged(): ?bool
    {
        return $this->connectionSecurityRulesFromGroupPolicyMerged;
    }

    public function setConnectionSecurityRulesFromGroupPolicyMerged(?bool $connectionSecurityRulesFromGroupPolicyMerged): self
    {
        $this->connectionSecurityRulesFromGroupPolicyMerged = $connectionSecurityRulesFromGroupPolicyMerged;
        return $this;
    }

    public function getFirewallEnabled(): ?string
    {
        return $this->firewallEnabled;
    }

    public function setFirewallEnabled(?string $firewallEnabled): self
    {
        $this->firewallEnabled = $firewallEnabled;
        return $this;
    }

    public function getGlobalPortRulesFromGroupPolicyMerged(): ?bool
    {
        return $this->globalPortRulesFromGroupPolicyMerged;
    }

    public function setGlobalPortRulesFromGroupPolicyMerged(?bool $globalPortRulesFromGroupPolicyMerged): self
    {
        $this->globalPortRulesFromGroupPolicyMerged = $globalPortRulesFromGroupPolicyMerged;
        return $this;
    }

    public function getInboundConnectionsBlocked(): ?bool
    {
        return $this->inboundConnectionsBlocked;
    }

    public function setInboundConnectionsBlocked(?bool $inboundConnectionsBlocked): self
    {
        $this->inboundConnectionsBlocked = $inboundConnectionsBlocked;
        return $this;
    }

    public function getInboundNotificationsBlocked(): ?bool
    {
        return $this->inboundNotificationsBlocked;
    }

    public function setInboundNotificationsBlocked(?bool $inboundNotificationsBlocked): self
    {
        $this->inboundNotificationsBlocked = $inboundNotificationsBlocked;
        return $this;
    }

    public function getIncomingTrafficBlocked(): ?bool
    {
        return $this->incomingTrafficBlocked;
    }

    public function setIncomingTrafficBlocked(?bool $incomingTrafficBlocked): self
    {
        $this->incomingTrafficBlocked = $incomingTrafficBlocked;
        return $this;
    }

    public function getOutboundConnectionsBlocked(): ?bool
    {
        return $this->outboundConnectionsBlocked;
    }

    public function setOutboundConnectionsBlocked(?bool $outboundConnectionsBlocked): self
    {
        $this->outboundConnectionsBlocked = $outboundConnectionsBlocked;
        return $this;
    }

    public function getPolicyRulesFromGroupPolicyMerged(): ?bool
    {
        return $this->policyRulesFromGroupPolicyMerged;
    }

    public function setPolicyRulesFromGroupPolicyMerged(?bool $policyRulesFromGroupPolicyMerged): self
    {
        $this->policyRulesFromGroupPolicyMerged = $policyRulesFromGroupPolicyMerged;
        return $this;
    }

    public function getSecuredPacketExemptionAllowed(): ?bool
    {
        return $this->securedPacketExemptionAllowed;
    }

    public function setSecuredPacketExemptionAllowed(?bool $securedPacketExemptionAllowed): self
    {
        $this->securedPacketExemptionAllowed = $securedPacketExemptionAllowed;
        return $this;
    }

    public function getStealthModeBlocked(): ?bool
    {
        return $this->stealthModeBlocked;
    }

    public function setStealthModeBlocked(?bool $stealthModeBlocked): self
    {
        $this->stealthModeBlocked = $stealthModeBlocked;
        return $this;
    }

    public function getUnicastResponsesToMulticastBroadcastsBlocked(): ?string
    {
        return $this->unicastResponsesToMulticastBroadcastsBlocked;
    }

    public function setUnicastResponsesToMulticastBroadcastsBlocked(?string $unicastResponsesToMulticastBroadcastsBlocked): self
    {
        $this->unicastResponsesToMulticastBroadcastsBlocked = $unicastResponsesToMulticastBroadcastsBlocked;
        return $this;
    }

}
