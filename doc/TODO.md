# TODO

## Phase 1 — ClientException error code constants ✅

- [x] Add `ERR_GENERIC`, `ERR_SOCKET`, `ERR_AUTH`, `ERR_PROTOCOL`, `ERR_READ`, `ERR_WRITE`, `ERR_TIMEOUT` constants to `ClientException`
- [x] Update all 6 throw sites in `ClientImpl.php` with appropriate error codes
- [x] Tag `v2.1.0`

### Unplanned items discovered
- [x] Pre-existing test suite incompatibility with PHPUnit 12 (deprecated annotations, class naming) — needs separate migration effort
- [x] Fixed pre-existing trailing whitespace in `StatusAction.php`
- [x] Created `CHANGELOG.md`

## Phase 2 — Update consuming application (separate repo)

- [ ] Update `Server.php` — switch `classifyAmiError()` from string matching to `$e->getCode()` matching
- [ ] Update `composer.json` constraint to `"sbuelow/pami": "^2.1"`
- [ ] Run `composer update sbuelow/pami`

## Future Ideas (from doc/IDEAS.md)

- Event Parser Flexibility (`EventParserInterface`)
- Connection Pooling (`PamiPool`)
- Action Queue / Promise Interface
- Event Subscription by ActionID
- TLS Support
- Swoole / ReactPHP Adapter
