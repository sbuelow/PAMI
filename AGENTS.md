AGENTS.md
==========

## Repo Structure
- Run all `composer`/`phing`/`phpunit`/`php-cs-fixer` commands from the repo root.

## Key Commands (from `framework/`)
- Install deps: `composer install`
- Full CI checks: `./vendor/bin/phing build` (runs cs + md; test and doc targets have issues)
- Run tests: `./vendor/bin/phpunit` (uses `phpunit.xml.dist` in framework root)
- Code style: `./vendor/bin/php-cs-fixer fix --dry-run --diff` (check) / `fix` (apply)


## Sample Configs
- All sample configs (Apache, PHP-FPM, env, DB, SELinux) are in `doc/samples/`.
- Customized env samples (`docs/samples/env/.env.*`) are gitignored.

## Project Rules
- Never commit `build/` or `vendor/` to git
- Run lint/style checks before committing: `./vendor/bin/php-cs-fixer fix --dry-run`
- After completing each phase or task, immediately update `doc/TODO.md` — mark items done, add any unplanned steps that were discovered during implementation, and renumber subsequent phases if needed. This file must always reflect the actual project state at the end of each session.

## Coding Best Practices
- Follow PER Coding Style Guide.
- Follow PSR-4 for Autoloading standard.

## Agent Behaviour
- Act as an experienced senior programmer.
- Keep conversations in english only.
- When asked to proceed with TODO list, do only what you're asked for. Don't go any further on your own.
- Give constructive feedback ideas and be blunt, do not compliment me.
- Ignore `scratchpad/` content.
