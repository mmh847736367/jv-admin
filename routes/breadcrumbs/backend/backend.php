<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

Breadcrumbs::for('admin.nccne.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('你瞅啥敏感词管理', route('admin.nccne.filterword.index'));
});
Breadcrumbs::for('admin.nccne.filterword.edit', function($trail) {
    $trail->parent('admin.nccne.filterword.index');
    $trail->push('编辑', route('admin.nccne.filterword.edit'));
});
Breadcrumbs::for('admin.nccne.filterword.create', function($trail) {
    $trail->parent('admin.nccne.filterword.index');
    $trail->push('上传', route('admin.nccne.filterword.create'));
});


Breadcrumbs::for('admin.jiangshanshi.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('拼购网敏感词管理', route('admin.jiangshanshi.filterword.index'));
});
Breadcrumbs::for('admin.jiangshanshi.filterword.edit', function($trail) {
    $trail->parent('admin.jiangshanshi.filterword.index');
    $trail->push('编辑', route('admin.jiangshanshi.filterword.edit'));
});
Breadcrumbs::for('admin.jiangshanshi.filterword.create', function($trail) {
    $trail->parent('admin.jiangshanshi.filterword.index');
    $trail->push('上传', route('admin.jiangshanshi.filterword.create'));
});


Breadcrumbs::for('admin.jiangyihua.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('讲一话敏感词管理', route('admin.jiangyihua.filterword.index'));
});
Breadcrumbs::for('admin.jiangyihua.filterword.edit', function($trail) {
    $trail->parent('admin.jiangyihua.filterword.index');
    $trail->push('编辑', route('admin.jiangyihua.filterword.edit'));
});
Breadcrumbs::for('admin.jiangyihua.filterword.create', function($trail) {
    $trail->parent('admin.jiangyihua.filterword.index');
    $trail->push('上传', route('admin.jiangyihua.filterword.create'));
});

Breadcrumbs::for('admin.gxcor.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('购酷网敏感词管理', route('admin.gxcor.filterword.index'));
});
Breadcrumbs::for('admin.gxcor.filterword.edit', function($trail) {
    $trail->parent('admin.gxcor.filterword.index');
    $trail->push('编辑', route('admin.gxcor.filterword.edit'));
});
Breadcrumbs::for('admin.gxcor.filterword.create', function($trail) {
    $trail->parent('admin.gxcor.filterword.index');
    $trail->push('上传', route('admin.gxcor.filterword.create'));
});

Breadcrumbs::for('admin.chinawbk.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('移动图书网敏感词管理', route('admin.chinawbk.filterword.index'));
});
Breadcrumbs::for('admin.chinawbk.filterword.edit', function($trail) {
    $trail->parent('admin.chinawbk.filterword.index');
    $trail->push('编辑', route('admin.chinawbk.filterword.edit'));
});
Breadcrumbs::for('admin.chinawbk.filterword.create', function($trail) {
    $trail->parent('admin.chinawbk.filterword.index');
    $trail->push('上传', route('admin.chinawbk.filterword.create'));
});

Breadcrumbs::for('admin.chinashangpinku.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('中华商品库敏感词管理', route('admin.chinashangpinku.filterword.index'));
});
Breadcrumbs::for('admin.chinashangpinku.filterword.edit', function($trail) {
    $trail->parent('admin.chinashangpinku.filterword.index');
    $trail->push('编辑', route('admin.chinashangpinku.filterword.edit'));
});
Breadcrumbs::for('admin.chinashangpinku.filterword.create', function($trail) {
    $trail->parent('admin.chinashangpinku.filterword.index');
    $trail->push('上传', route('admin.chinashangpinku.filterword.create'));
});


Breadcrumbs::for('admin.chengyekeji.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('橙叶知识网敏感词管理', route('admin.chengyekeji.filterword.index'));
});
Breadcrumbs::for('admin.chengyekeji.filterword.edit', function($trail) {
    $trail->parent('admin.chengyekeji.filterword.index');
    $trail->push('编辑', route('admin.chengyekeji.filterword.edit'));
});
Breadcrumbs::for('admin.chengyekeji.filterword.create', function($trail) {
    $trail->parent('admin.chengyekeji.filterword.index');
    $trail->push('上传', route('admin.chengyekeji.filterword.create'));
});

Breadcrumbs::for('admin.byete.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('必应比价网敏感词管理', route('admin.byete.filterword.index'));
});
Breadcrumbs::for('admin.byete.filterword.edit', function($trail) {
    $trail->parent('admin.byete.filterword.index');
    $trail->push('编辑', route('admin.byete.filterword.edit'));
});
Breadcrumbs::for('admin.byete.filterword.create', function($trail) {
    $trail->parent('admin.byete.filterword.index');
    $trail->push('上传', route('admin.byete.filterword.create'));
});

Breadcrumbs::for('admin.mchinawbk.filterword.index', function($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('移动影音网敏感词管理', route('admin.mchinawbk.filterword.index'));
});
Breadcrumbs::for('admin.mchinawbk.filterword.edit', function($trail) {
    $trail->parent('admin.mchinawbk.filterword.index');
    $trail->push('编辑', route('admin.mchinawbk.filterword.edit'));
});
Breadcrumbs::for('admin.mchinawbk.filterword.create', function($trail) {
    $trail->parent('admin.mchinawbk.filterword.index');
    $trail->push('上传', route('admin.mchinawbk.filterword.create'));
});
