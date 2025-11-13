<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\Messages;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceAnnouncementAttachmentCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\Models\ServiceAnnouncementAttachment;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\Messages\Attachments\ServiceAnnouncementAttachmentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\ServiceAnnouncement\Messages\Attachments\CountRequestBuilder;

/**
 * Request builder for /admin/serviceAnnouncement/messages/{serviceUpdateMessage-id}/attachments
 */
class AttachmentsRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * List attachments
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @param int|null $top Show only the first n items
     * @param int|null $skip Skip the first n items
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @param bool|null $count Include count of items
     * @param array<int, string>|null $orderby Order items by property values
     * @return ServiceAnnouncementAttachmentCollectionResponse|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null, ?int $top = null, ?int $skip = null, ?string $search = null, ?string $filter = null, ?bool $count = null, ?array $orderby = null): ServiceAnnouncementAttachmentCollectionResponse|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        if ($top !== null) {
            $queryParams['$top'] = $top;
        }
        if ($skip !== null) {
            $queryParams['$skip'] = $skip;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        if ($count !== null) {
            $queryParams['$count'] = $count ? 'true' : 'false';
        }
        if ($orderby !== null && $orderby !== []) {
            $queryParams['$orderby'] = implode(',', $orderby);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ServiceAnnouncementAttachmentCollectionResponse|null
     */
    private function deserializeGet(string $body): ServiceAnnouncementAttachmentCollectionResponse|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = new ServiceAnnouncementAttachment($item);
        }
        $collection = new ServiceAnnouncementAttachmentCollectionResponse($data);
        $collection->value = $items;
        return $collection;
    }
    /**
     * Create new navigation property to attachments for admin
     * @param ServiceAnnouncementAttachment $body Request body
     * @return ServiceAnnouncementAttachment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ServiceAnnouncementAttachment $body): ServiceAnnouncementAttachment|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ServiceAnnouncementAttachment|null
     */
    private function deserializePost(string $body): ServiceAnnouncementAttachment|null    {
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
     * Get request builder for specific item by ID
     *
     * @param string $serviceAnnouncementAttachmentId The item ID
     * @return ServiceAnnouncementAttachmentRequestBuilder
     */
    public function byId(string $serviceAnnouncementAttachmentId): ServiceAnnouncementAttachmentRequestBuilder
    {
        return new ServiceAnnouncementAttachmentRequestBuilder($this->client, $this->requestUrl . '/' . $serviceAnnouncementAttachmentId);
    }
    /**
     * Navigate to $count
     *
     * @return CountRequestBuilder
     */
    public function count(): CountRequestBuilder
    {
        return new CountRequestBuilder($this->client, $this->requestUrl . '/$count');
    }
}
