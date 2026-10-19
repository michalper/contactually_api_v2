# contactually_api_v2

Unofficial PHP client for the Contactually REST API v2 (API key auth).

## Install

```bash
composer require michalper/contactually_api_v2
```

## Usage

```php
$client = new ContactuallyClient();
$client->setApiKey('...');

$contacts = $client->contact->search(new SearchModel());
$contact = $client->contact->create($contactModel);
$client->contact->update($contactModel);
$client->contact->delete($contactModel);
```

`contact` covers `search`/`create`/`update`/`delete`; `user` exposes the authenticated user's own profile. Built against the [Contactually API v2 docs](https://developers.contactually.com/docs/v2/).

## License

GNU GPL
