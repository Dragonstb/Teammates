# Technical concepts

## Persistency

For a quick start, we included an SQLite database. In the long run, we may switch to a graph database.

## Security

### Roles

- ROLE_TEAMMATE can see the secured pages that do not need other roles. Assigned to every registered member of the team.
- ROLE_MANAGER can add, edit, and delete events. Can also add, edit, and delete event templates.
- ROLE_ADMIN can grant or revoke other roles than ROLE_TEAMMATE. Can reset passwords and delete users.