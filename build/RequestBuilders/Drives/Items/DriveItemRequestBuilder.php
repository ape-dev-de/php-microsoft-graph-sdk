<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\AnalyticsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\ChildrenRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\ContentRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\CreatedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\LastModifiedByUserRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\ListItemRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\AssignSensitivityLabelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\CheckinRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\CheckoutRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\CopyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\CreateLinkRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\CreateUploadSessionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\DeltaRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\DiscardCheckoutRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\ExtractSensitivityLabelsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\FollowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\GetActivitiesByIntervalRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\InviteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\PermanentDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\PreviewRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\RestoreRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\SearchRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\UnfollowRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\ValidatePermissionRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\PermissionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\RetentionLabelRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\SubscriptionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\ThumbnailsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\VersionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\WorkbookRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}
 */
class DriveItemRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get items from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return DriveItem
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): DriveItem
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
     * Deserialize response to DriveItem
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
        return new DriveItem($data);
    }
    /**
     * Update the navigation property items in drives
     * @param DriveItem $body Request body
     * @return DriveItem
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(DriveItem $body): DriveItem
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to DriveItem
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
        return new DriveItem($data);
    }
    /**
     * Delete navigation property items for drives
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
     * Navigate to analytics
     *
     * @return AnalyticsRequestBuilder
     */
    public function analytics(): AnalyticsRequestBuilder
    {
        return new AnalyticsRequestBuilder($this->client, $this->requestUrl . '/analytics');
    }
    /**
     * Navigate to children
     *
     * @return ChildrenRequestBuilder
     */
    public function children(): ChildrenRequestBuilder
    {
        return new ChildrenRequestBuilder($this->client, $this->requestUrl . '/children');
    }
    /**
     * Navigate to content
     *
     * @return ContentRequestBuilder
     */
    public function content(): ContentRequestBuilder
    {
        return new ContentRequestBuilder($this->client, $this->requestUrl . '/content');
    }
    /**
     * Navigate to createdByUser
     *
     * @return CreatedByUserRequestBuilder
     */
    public function createdByUser(): CreatedByUserRequestBuilder
    {
        return new CreatedByUserRequestBuilder($this->client, $this->requestUrl . '/createdByUser');
    }
    /**
     * Navigate to lastModifiedByUser
     *
     * @return LastModifiedByUserRequestBuilder
     */
    public function lastModifiedByUser(): LastModifiedByUserRequestBuilder
    {
        return new LastModifiedByUserRequestBuilder($this->client, $this->requestUrl . '/lastModifiedByUser');
    }
    /**
     * Navigate to listItem
     *
     * @return ListItemRequestBuilder
     */
    public function listItem(): ListItemRequestBuilder
    {
        return new ListItemRequestBuilder($this->client, $this->requestUrl . '/listItem');
    }
    /**
     * Navigate to assignSensitivityLabel
     *
     * @return AssignSensitivityLabelRequestBuilder
     */
    public function assignSensitivityLabel(): AssignSensitivityLabelRequestBuilder
    {
        return new AssignSensitivityLabelRequestBuilder($this->client, $this->requestUrl . '/assignSensitivityLabel');
    }
    /**
     * Navigate to checkin
     *
     * @return CheckinRequestBuilder
     */
    public function checkin(): CheckinRequestBuilder
    {
        return new CheckinRequestBuilder($this->client, $this->requestUrl . '/checkin');
    }
    /**
     * Navigate to checkout
     *
     * @return CheckoutRequestBuilder
     */
    public function checkout(): CheckoutRequestBuilder
    {
        return new CheckoutRequestBuilder($this->client, $this->requestUrl . '/checkout');
    }
    /**
     * Navigate to copy
     *
     * @return CopyRequestBuilder
     */
    public function copy(): CopyRequestBuilder
    {
        return new CopyRequestBuilder($this->client, $this->requestUrl . '/copy');
    }
    /**
     * Navigate to createLink
     *
     * @return CreateLinkRequestBuilder
     */
    public function createLink(): CreateLinkRequestBuilder
    {
        return new CreateLinkRequestBuilder($this->client, $this->requestUrl . '/createLink');
    }
    /**
     * Navigate to createUploadSession
     *
     * @return CreateUploadSessionRequestBuilder
     */
    public function createUploadSession(): CreateUploadSessionRequestBuilder
    {
        return new CreateUploadSessionRequestBuilder($this->client, $this->requestUrl . '/createUploadSession');
    }
    /**
     * Navigate to delta()
     *
     * @return DeltaRequestBuilder
     */
    public function delta(): DeltaRequestBuilder
    {
        return new DeltaRequestBuilder($this->client, $this->requestUrl . '/delta()');
    }
    /**
     * Navigate to discardCheckout
     *
     * @return DiscardCheckoutRequestBuilder
     */
    public function discardCheckout(): DiscardCheckoutRequestBuilder
    {
        return new DiscardCheckoutRequestBuilder($this->client, $this->requestUrl . '/discardCheckout');
    }
    /**
     * Navigate to extractSensitivityLabels
     *
     * @return ExtractSensitivityLabelsRequestBuilder
     */
    public function extractSensitivityLabels(): ExtractSensitivityLabelsRequestBuilder
    {
        return new ExtractSensitivityLabelsRequestBuilder($this->client, $this->requestUrl . '/extractSensitivityLabels');
    }
    /**
     * Navigate to follow
     *
     * @return FollowRequestBuilder
     */
    public function follow(): FollowRequestBuilder
    {
        return new FollowRequestBuilder($this->client, $this->requestUrl . '/follow');
    }
    /**
     * Navigate to getActivitiesByInterval()
     *
     * @return GetActivitiesByIntervalRequestBuilder
     */
    public function getActivitiesByInterval(): GetActivitiesByIntervalRequestBuilder
    {
        return new GetActivitiesByIntervalRequestBuilder($this->client, $this->requestUrl . '/getActivitiesByInterval()');
    }
    /**
     * Navigate to invite
     *
     * @return InviteRequestBuilder
     */
    public function invite(): InviteRequestBuilder
    {
        return new InviteRequestBuilder($this->client, $this->requestUrl . '/invite');
    }
    /**
     * Navigate to permanentDelete
     *
     * @return PermanentDeleteRequestBuilder
     */
    public function permanentDelete(): PermanentDeleteRequestBuilder
    {
        return new PermanentDeleteRequestBuilder($this->client, $this->requestUrl . '/permanentDelete');
    }
    /**
     * Navigate to preview
     *
     * @return PreviewRequestBuilder
     */
    public function preview(): PreviewRequestBuilder
    {
        return new PreviewRequestBuilder($this->client, $this->requestUrl . '/preview');
    }
    /**
     * Navigate to restore
     *
     * @return RestoreRequestBuilder
     */
    public function restore(): RestoreRequestBuilder
    {
        return new RestoreRequestBuilder($this->client, $this->requestUrl . '/restore');
    }
    /**
     * Navigate to unfollow
     *
     * @return UnfollowRequestBuilder
     */
    public function unfollow(): UnfollowRequestBuilder
    {
        return new UnfollowRequestBuilder($this->client, $this->requestUrl . '/unfollow');
    }
    /**
     * Navigate to validatePermission
     *
     * @return ValidatePermissionRequestBuilder
     */
    public function validatePermission(): ValidatePermissionRequestBuilder
    {
        return new ValidatePermissionRequestBuilder($this->client, $this->requestUrl . '/validatePermission');
    }
    /**
     * Navigate to permissions
     *
     * @return PermissionsRequestBuilder
     */
    public function permissions(): PermissionsRequestBuilder
    {
        return new PermissionsRequestBuilder($this->client, $this->requestUrl . '/permissions');
    }
    /**
     * Navigate to retentionLabel
     *
     * @return RetentionLabelRequestBuilder
     */
    public function retentionLabel(): RetentionLabelRequestBuilder
    {
        return new RetentionLabelRequestBuilder($this->client, $this->requestUrl . '/retentionLabel');
    }
    /**
     * Navigate to subscriptions
     *
     * @return SubscriptionsRequestBuilder
     */
    public function subscriptions(): SubscriptionsRequestBuilder
    {
        return new SubscriptionsRequestBuilder($this->client, $this->requestUrl . '/subscriptions');
    }
    /**
     * Navigate to thumbnails
     *
     * @return ThumbnailsRequestBuilder
     */
    public function thumbnails(): ThumbnailsRequestBuilder
    {
        return new ThumbnailsRequestBuilder($this->client, $this->requestUrl . '/thumbnails');
    }
    /**
     * Navigate to versions
     *
     * @return VersionsRequestBuilder
     */
    public function versions(): VersionsRequestBuilder
    {
        return new VersionsRequestBuilder($this->client, $this->requestUrl . '/versions');
    }
    /**
     * Navigate to workbook
     *
     * @return WorkbookRequestBuilder
     */
    public function workbook(): WorkbookRequestBuilder
    {
        return new WorkbookRequestBuilder($this->client, $this->requestUrl . '/workbook');
    }
}
