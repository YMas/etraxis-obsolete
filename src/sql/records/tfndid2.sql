select distinct

    p.project_name,
    t.template_name

from

    tbl_accounts    a,
    tbl_projects    p,
    tbl_group_perms gp,
    tbl_membership  ms,
    tbl_templates   t

where

    p.project_id  = t.project_id   and
    t.template_id = gp.template_id and
    ms.group_id   = gp.group_id    and
    ms.account_id = a.account_id   and

    a.account_id  = %1 and
    p.project_id  = %2 and
    t.template_id = %3

order by template_name
