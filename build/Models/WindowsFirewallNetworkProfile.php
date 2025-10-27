<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsFirewallNetworkProfile
 */
class WindowsFirewallNetworkProfile
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority. */
    public ?bool $authorizedApplicationRulesFromGroupPolicyMerged = null;

    /** Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority. */
    public ?bool $connectionSecurityRulesFromGroupPolicyMerged = null;

    /**  */
    public ?StateManagementSetting $firewallEnabled = null;

    /** Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority. */
    public ?bool $globalPortRulesFromGroupPolicyMerged = null;

    /** Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority. */
    public ?bool $inboundConnectionsBlocked = null;

    /** Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority. */
    public ?bool $inboundNotificationsBlocked = null;

    /** Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority. */
    public ?bool $incomingTrafficBlocked = null;

    /** Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above. */
    public ?bool $outboundConnectionsBlocked = null;

    /** Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority. */
    public ?bool $policyRulesFromGroupPolicyMerged = null;

    /** Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority. */
    public ?bool $securedPacketExemptionAllowed = null;

    /** Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority. */
    public ?bool $stealthModeBlocked = null;

    /** Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority. */
    public ?bool $unicastResponsesToMulticastBroadcastsBlocked = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['authorizedApplicationRulesFromGroupPolicyMerged'])) {
            $this->authorizedApplicationRulesFromGroupPolicyMerged = is_bool($data['authorizedApplicationRulesFromGroupPolicyMerged']) ? $data['authorizedApplicationRulesFromGroupPolicyMerged'] : (bool)$data['authorizedApplicationRulesFromGroupPolicyMerged'];
        }
        if (isset($data['connectionSecurityRulesFromGroupPolicyMerged'])) {
            $this->connectionSecurityRulesFromGroupPolicyMerged = is_bool($data['connectionSecurityRulesFromGroupPolicyMerged']) ? $data['connectionSecurityRulesFromGroupPolicyMerged'] : (bool)$data['connectionSecurityRulesFromGroupPolicyMerged'];
        }
        if (isset($data['firewallEnabled'])) {
            $this->firewallEnabled = is_string($data['firewallEnabled']) ? StateManagementSetting::tryFrom($data['firewallEnabled']) : $data['firewallEnabled'];
        }
        if (isset($data['globalPortRulesFromGroupPolicyMerged'])) {
            $this->globalPortRulesFromGroupPolicyMerged = is_bool($data['globalPortRulesFromGroupPolicyMerged']) ? $data['globalPortRulesFromGroupPolicyMerged'] : (bool)$data['globalPortRulesFromGroupPolicyMerged'];
        }
        if (isset($data['inboundConnectionsBlocked'])) {
            $this->inboundConnectionsBlocked = is_bool($data['inboundConnectionsBlocked']) ? $data['inboundConnectionsBlocked'] : (bool)$data['inboundConnectionsBlocked'];
        }
        if (isset($data['inboundNotificationsBlocked'])) {
            $this->inboundNotificationsBlocked = is_bool($data['inboundNotificationsBlocked']) ? $data['inboundNotificationsBlocked'] : (bool)$data['inboundNotificationsBlocked'];
        }
        if (isset($data['incomingTrafficBlocked'])) {
            $this->incomingTrafficBlocked = is_bool($data['incomingTrafficBlocked']) ? $data['incomingTrafficBlocked'] : (bool)$data['incomingTrafficBlocked'];
        }
        if (isset($data['outboundConnectionsBlocked'])) {
            $this->outboundConnectionsBlocked = is_bool($data['outboundConnectionsBlocked']) ? $data['outboundConnectionsBlocked'] : (bool)$data['outboundConnectionsBlocked'];
        }
        if (isset($data['policyRulesFromGroupPolicyMerged'])) {
            $this->policyRulesFromGroupPolicyMerged = is_bool($data['policyRulesFromGroupPolicyMerged']) ? $data['policyRulesFromGroupPolicyMerged'] : (bool)$data['policyRulesFromGroupPolicyMerged'];
        }
        if (isset($data['securedPacketExemptionAllowed'])) {
            $this->securedPacketExemptionAllowed = is_bool($data['securedPacketExemptionAllowed']) ? $data['securedPacketExemptionAllowed'] : (bool)$data['securedPacketExemptionAllowed'];
        }
        if (isset($data['stealthModeBlocked'])) {
            $this->stealthModeBlocked = is_bool($data['stealthModeBlocked']) ? $data['stealthModeBlocked'] : (bool)$data['stealthModeBlocked'];
        }
        if (isset($data['unicastResponsesToMulticastBroadcastsBlocked'])) {
            $this->unicastResponsesToMulticastBroadcastsBlocked = is_bool($data['unicastResponsesToMulticastBroadcastsBlocked']) ? $data['unicastResponsesToMulticastBroadcastsBlocked'] : (bool)$data['unicastResponsesToMulticastBroadcastsBlocked'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
