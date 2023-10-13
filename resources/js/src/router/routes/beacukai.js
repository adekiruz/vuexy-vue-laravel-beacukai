export default [
    {
        path: '/import',
        name: 'import',
        component: () => import('@/views/pages/beacukai/import/Import.vue'),
    },
    {
        path: '/export',
        name: 'export',
        component: () => import('@/views/pages/beacukai/export/Export.vue'),
    },
];