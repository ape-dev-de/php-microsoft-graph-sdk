<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequests;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SubjectRightsRequest;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequests\ApproversRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequests\CollaboratorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequests\GetFinalAttachmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequests\GetFinalReportRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequests\NotesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Privacy\SubjectRightsRequests\TeamRequestBuilder;

/**
 * Request builder for /privacy/subjectRightsRequests/{subjectRightsRequest-id}
 */
class SubjectRightsRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get subjectRightsRequest
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SubjectRightsRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SubjectRightsRequest|null
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
     * Deserialize response to SubjectRightsRequest|null
     */
    private function deserializeGet(string $body): SubjectRightsRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SubjectRightsRequest($data);
    }
    /**
     * Update subjectRightsRequest
     * @param SubjectRightsRequest $body Request body
     * @return SubjectRightsRequest|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SubjectRightsRequest $body): SubjectRightsRequest|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SubjectRightsRequest|null
     */
    private function deserializePatch(string $body): SubjectRightsRequest|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SubjectRightsRequest($data);
    }
    /**
     * Delete navigation property subjectRightsRequests for privacy
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
    private function deserializeDelete(string $body): mixed    {
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
     * Navigate to approvers
     *
     * @return ApproversRequestBuilder
     */
    public function approvers(): ApproversRequestBuilder
    {
        return new ApproversRequestBuilder($this->client, $this->requestUrl . '/approvers');
    }
    /**
     * Navigate to collaborators
     *
     * @return CollaboratorsRequestBuilder
     */
    public function collaborators(): CollaboratorsRequestBuilder
    {
        return new CollaboratorsRequestBuilder($this->client, $this->requestUrl . '/collaborators');
    }
    /**
     * Navigate to getFinalAttachment()
     *
     * @return GetFinalAttachmentRequestBuilder
     */
    public function getFinalAttachment(): GetFinalAttachmentRequestBuilder
    {
        return new GetFinalAttachmentRequestBuilder($this->client, $this->requestUrl . '/getFinalAttachment()');
    }
    /**
     * Navigate to getFinalReport()
     *
     * @return GetFinalReportRequestBuilder
     */
    public function getFinalReport(): GetFinalReportRequestBuilder
    {
        return new GetFinalReportRequestBuilder($this->client, $this->requestUrl . '/getFinalReport()');
    }
    /**
     * Navigate to notes
     *
     * @return NotesRequestBuilder
     */
    public function notes(): NotesRequestBuilder
    {
        return new NotesRequestBuilder($this->client, $this->requestUrl . '/notes');
    }
    /**
     * Navigate to team
     *
     * @return TeamRequestBuilder
     */
    public function team(): TeamRequestBuilder
    {
        return new TeamRequestBuilder($this->client, $this->requestUrl . '/team');
    }
}
