# instagram-upload-image-api
A PHP API to upload images with location, hashtag, caption to Instagram using Instagram Graph API.


Access Tokens
- Requires Access Tokes, and if possible never expire tokens

Permissions
- ads_management
- business_management
- instagram_basic
- instagram_content_publish
- pages_read_engagement

Public Server
- Media should be already hosted because Insgram Graph API uses cURL to get the image.


Rate Limit
Instagram accounts are limited to 25 API-published posts within a 24 hour moving period. Carousels count as a single post. This limit is enforced on the POST /{ig-user-id}/media_publish endpoint when attempting to publish a media container. We recommend that your app also enforce the publishing rate limit, especially if your app allows app users to schedule posts to be published in the future.


Endpoints
The API consists of the following endpoints. Refer to each endpoint's reference document for usage requirements.

- POST /{ig-user-id}/media — upload media and create media containers.
- POST /{ig-user-id}/media_publish — publish uploaded media using their media containers.
- GET /{ig-container-id}?fields=status_code — check media container publishing eligibility and status.
- GET /{ig-user-id}/content_publishing_limit — check app user's current publishing rate limit usage.