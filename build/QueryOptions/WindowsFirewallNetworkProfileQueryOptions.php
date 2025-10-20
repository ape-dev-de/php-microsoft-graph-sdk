<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsFirewallNetworkProfile resources
 *
 * Available select fields:
 * - authorizedApplicationRulesFromGroupPolicyMerged
 * - connectionSecurityRulesFromGroupPolicyMerged
 * - firewallEnabled
 * - globalPortRulesFromGroupPolicyMerged
 * - inboundConnectionsBlocked
 * - inboundNotificationsBlocked
 * - incomingTrafficBlocked
 * - outboundConnectionsBlocked
 * - policyRulesFromGroupPolicyMerged
 * - securedPacketExemptionAllowed
 * - stealthModeBlocked
 * - unicastResponsesToMulticastBroadcastsBlocked
 */
class WindowsFirewallNetworkProfileQueryOptions extends QueryOptions
{
    public const FIELD_AUTHORIZED_APPLICATION_RULES_FROM_GROUP_POLICY_MERGED = 'authorizedApplicationRulesFromGroupPolicyMerged';
    public const FIELD_CONNECTION_SECURITY_RULES_FROM_GROUP_POLICY_MERGED = 'connectionSecurityRulesFromGroupPolicyMerged';
    public const FIELD_FIREWALL_ENABLED = 'firewallEnabled';
    public const FIELD_GLOBAL_PORT_RULES_FROM_GROUP_POLICY_MERGED = 'globalPortRulesFromGroupPolicyMerged';
    public const FIELD_INBOUND_CONNECTIONS_BLOCKED = 'inboundConnectionsBlocked';
    public const FIELD_INBOUND_NOTIFICATIONS_BLOCKED = 'inboundNotificationsBlocked';
    public const FIELD_INCOMING_TRAFFIC_BLOCKED = 'incomingTrafficBlocked';
    public const FIELD_OUTBOUND_CONNECTIONS_BLOCKED = 'outboundConnectionsBlocked';
    public const FIELD_POLICY_RULES_FROM_GROUP_POLICY_MERGED = 'policyRulesFromGroupPolicyMerged';
    public const FIELD_SECURED_PACKET_EXEMPTION_ALLOWED = 'securedPacketExemptionAllowed';
    public const FIELD_STEALTH_MODE_BLOCKED = 'stealthModeBlocked';
    public const FIELD_UNICAST_RESPONSES_TO_MULTICAST_BROADCASTS_BLOCKED = 'unicastResponsesToMulticastBroadcastsBlocked';

    /**
     * Select specific WindowsFirewallNetworkProfile properties
     * 
     * @param array<string> $select Use WindowsFirewallNetworkProfileQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
