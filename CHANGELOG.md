# Changelog

## v2.1.0 — 2026-05-14

### Added
- `ClientException` error code constants: `ERR_SOCKET`, `ERR_AUTH`, `ERR_PROTOCOL`, `ERR_READ`, `ERR_WRITE`, `ERR_TIMEOUT` — all 6 throw sites in `ClientImpl` now pass a meaningful `$code` as the 2nd argument to `ClientException` (previously always `0`).
- `StatusAction::setVariables()` and `StatusAction::setAllVariables()` methods.
- `AGENTS.md` — project-level agent configuration file.
- `doc/IDEAS.md` — implementation notes and future extension ideas.

### Fixed
- `AsyncClientImpl`: added missing `$options` property declaration.
- `AsyncClientImpl`: null guard in `process()` when `findResponse()` returns `false`.
- `build.xml`: `<target name="cs">` indentation.
- Trailing whitespace in `StatusAction.php`.

## v2.0.5 — 2025-10-30

- Creation of dynamic property DEPRECATED warning fixed.
- Test code cleanup.

## v2.0.4 — 2025-08-12

- Composer dependencies update.

## v2.0.3 — 2025-05-20

- Update phing project and doc building.
- MD and CS code cleanup with @PER-CS ruleset.
