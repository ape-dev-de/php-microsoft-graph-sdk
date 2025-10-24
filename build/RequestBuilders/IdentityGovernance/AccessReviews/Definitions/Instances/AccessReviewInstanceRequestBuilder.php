<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessReviewInstance;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\ContactedReviewersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\DecisionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\AcceptRecommendationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\ApplyDecisionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\BatchRecordDecisionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\ResetDecisionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\SendReminderRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\StopRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\AccessReviews\Definitions\Instances\StagesRequestBuilder;

/**
 * Request builder for /identityGovernance/accessReviews/definitions/{accessReviewScheduleDefinition-id}/instances/{accessReviewInstance-id}
 */
class AccessReviewInstanceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get accessReviewInstance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessReviewInstance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessReviewInstance
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AccessReviewInstance
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
        return new AccessReviewInstance($data);
    }
    /**
     * Update accessReviewInstance
     * @param AccessReviewInstance $body Request body
     * @return AccessReviewInstance
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AccessReviewInstance $body): AccessReviewInstance
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AccessReviewInstance
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
        return new AccessReviewInstance($data);
    }
    /**
     * Delete navigation property instances for identityGovernance
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to contactedReviewers
     *
     * @return ContactedReviewersRequestBuilder
     */
    public function contactedReviewers(): ContactedReviewersRequestBuilder
    {
        return new ContactedReviewersRequestBuilder($this->client, $this->requestUrl . '/contactedReviewers');
    }
    /**
     * Navigate to decisions
     *
     * @return DecisionsRequestBuilder
     */
    public function decisions(): DecisionsRequestBuilder
    {
        return new DecisionsRequestBuilder($this->client, $this->requestUrl . '/decisions');
    }
    /**
     * Navigate to acceptRecommendations
     *
     * @return AcceptRecommendationsRequestBuilder
     */
    public function acceptRecommendations(): AcceptRecommendationsRequestBuilder
    {
        return new AcceptRecommendationsRequestBuilder($this->client, $this->requestUrl . '/acceptRecommendations');
    }
    /**
     * Navigate to applyDecisions
     *
     * @return ApplyDecisionsRequestBuilder
     */
    public function applyDecisions(): ApplyDecisionsRequestBuilder
    {
        return new ApplyDecisionsRequestBuilder($this->client, $this->requestUrl . '/applyDecisions');
    }
    /**
     * Navigate to batchRecordDecisions
     *
     * @return BatchRecordDecisionsRequestBuilder
     */
    public function batchRecordDecisions(): BatchRecordDecisionsRequestBuilder
    {
        return new BatchRecordDecisionsRequestBuilder($this->client, $this->requestUrl . '/batchRecordDecisions');
    }
    /**
     * Navigate to resetDecisions
     *
     * @return ResetDecisionsRequestBuilder
     */
    public function resetDecisions(): ResetDecisionsRequestBuilder
    {
        return new ResetDecisionsRequestBuilder($this->client, $this->requestUrl . '/resetDecisions');
    }
    /**
     * Navigate to sendReminder
     *
     * @return SendReminderRequestBuilder
     */
    public function sendReminder(): SendReminderRequestBuilder
    {
        return new SendReminderRequestBuilder($this->client, $this->requestUrl . '/sendReminder');
    }
    /**
     * Navigate to stop
     *
     * @return StopRequestBuilder
     */
    public function stop(): StopRequestBuilder
    {
        return new StopRequestBuilder($this->client, $this->requestUrl . '/stop');
    }
    /**
     * Navigate to stages
     *
     * @return StagesRequestBuilder
     */
    public function stages(): StagesRequestBuilder
    {
        return new StagesRequestBuilder($this->client, $this->requestUrl . '/stages');
    }
}
