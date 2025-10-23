<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Security;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AlertsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AlertsV2RequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\AttackSimulationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CasesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DataSecurityAndGovernanceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IncidentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\LabelsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecurityRunHuntingQueryRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecureScoreControlProfilesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SecureScoresRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubjectRightsRequestsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ThreatIntelligenceRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TriggersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TriggerTypesRequestBuilder;

/**
 * Request builder for security
 */
class SecurityRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Security
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Security
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to Security
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Security($data);
    }
    /**
     * Update security
     * @param Security $body Request body
     * @return Security
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Security $body): Security
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Security
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Security($data);
    }
    /**
     * Navigate to alerts
     *
     * @return AlertsRequestBuilder
     */
    public function alerts(): AlertsRequestBuilder
    {
        return new AlertsRequestBuilder($this->client, $this->requestUrl . '/alerts');
    }
    /**
     * Navigate to alerts_v2
     *
     * @return AlertsV2RequestBuilder
     */
    public function alertsV2(): AlertsV2RequestBuilder
    {
        return new AlertsV2RequestBuilder($this->client, $this->requestUrl . '/alerts_v2');
    }
    /**
     * Navigate to attackSimulation
     *
     * @return AttackSimulationRequestBuilder
     */
    public function attackSimulation(): AttackSimulationRequestBuilder
    {
        return new AttackSimulationRequestBuilder($this->client, $this->requestUrl . '/attackSimulation');
    }
    /**
     * Navigate to cases
     *
     * @return CasesRequestBuilder
     */
    public function cases(): CasesRequestBuilder
    {
        return new CasesRequestBuilder($this->client, $this->requestUrl . '/cases');
    }
    /**
     * Navigate to dataSecurityAndGovernance
     *
     * @return DataSecurityAndGovernanceRequestBuilder
     */
    public function dataSecurityAndGovernance(): DataSecurityAndGovernanceRequestBuilder
    {
        return new DataSecurityAndGovernanceRequestBuilder($this->client, $this->requestUrl . '/dataSecurityAndGovernance');
    }
    /**
     * Navigate to identities
     *
     * @return IdentitiesRequestBuilder
     */
    public function identities(): IdentitiesRequestBuilder
    {
        return new IdentitiesRequestBuilder($this->client, $this->requestUrl . '/identities');
    }
    /**
     * Navigate to incidents
     *
     * @return IncidentsRequestBuilder
     */
    public function incidents(): IncidentsRequestBuilder
    {
        return new IncidentsRequestBuilder($this->client, $this->requestUrl . '/incidents');
    }
    /**
     * Navigate to labels
     *
     * @return LabelsRequestBuilder
     */
    public function labels(): LabelsRequestBuilder
    {
        return new LabelsRequestBuilder($this->client, $this->requestUrl . '/labels');
    }
    /**
     * Navigate to microsoft.graph.security.runHuntingQuery
     *
     * @return SecurityRunHuntingQueryRequestBuilder
     */
    public function securityRunHuntingQuery(): SecurityRunHuntingQueryRequestBuilder
    {
        return new SecurityRunHuntingQueryRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.runHuntingQuery');
    }
    /**
     * Navigate to secureScoreControlProfiles
     *
     * @return SecureScoreControlProfilesRequestBuilder
     */
    public function secureScoreControlProfiles(): SecureScoreControlProfilesRequestBuilder
    {
        return new SecureScoreControlProfilesRequestBuilder($this->client, $this->requestUrl . '/secureScoreControlProfiles');
    }
    /**
     * Navigate to secureScores
     *
     * @return SecureScoresRequestBuilder
     */
    public function secureScores(): SecureScoresRequestBuilder
    {
        return new SecureScoresRequestBuilder($this->client, $this->requestUrl . '/secureScores');
    }
    /**
     * Navigate to subjectRightsRequests
     *
     * @return SubjectRightsRequestsRequestBuilder
     */
    public function subjectRightsRequests(): SubjectRightsRequestsRequestBuilder
    {
        return new SubjectRightsRequestsRequestBuilder($this->client, $this->requestUrl . '/subjectRightsRequests');
    }
    /**
     * Navigate to threatIntelligence
     *
     * @return ThreatIntelligenceRequestBuilder
     */
    public function threatIntelligence(): ThreatIntelligenceRequestBuilder
    {
        return new ThreatIntelligenceRequestBuilder($this->client, $this->requestUrl . '/threatIntelligence');
    }
    /**
     * Navigate to triggers
     *
     * @return TriggersRequestBuilder
     */
    public function triggers(): TriggersRequestBuilder
    {
        return new TriggersRequestBuilder($this->client, $this->requestUrl . '/triggers');
    }
    /**
     * Navigate to triggerTypes
     *
     * @return TriggerTypesRequestBuilder
     */
    public function triggerTypes(): TriggerTypesRequestBuilder
    {
        return new TriggerTypesRequestBuilder($this->client, $this->requestUrl . '/triggerTypes');
    }
}
