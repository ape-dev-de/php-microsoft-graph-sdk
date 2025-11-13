<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\Messages\Attachments;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceAnnouncementAttachment;

/**
 * Request builder for /admin/serviceAnnouncement/messages/{serviceUpdateMessage-id}/attachments/{serviceAnnouncementAttachment-id}/content
 */
class ContentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get serviceAnnouncementAttachment
     * @return string|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): string|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to string|null
     */
    private function deserializeGet(string $body): string|null    {
        if (empty($body)) {
            return null;
        }

        return $body;
    }
    /**
     * Update content for the navigation property attachments in admin
     * @param ServiceAnnouncementAttachment $body Request body
     * @return ServiceAnnouncementAttachment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function put(ServiceAnnouncementAttachment $body): ServiceAnnouncementAttachment|null
    {
        $response = $this->client->put($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePut($responseBody);
    }

    /**
     * Deserialize response to ServiceAnnouncementAttachment|null
     */
    private function deserializePut(string $body): ServiceAnnouncementAttachment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ServiceAnnouncementAttachment($data);
    }
    /**
     * Delete content for the navigation property attachments in admin
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
}
