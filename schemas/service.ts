import { defineField, defineType } from 'sanity'

export default defineType({
  name: 'service',
  title: 'Service',
  type: 'document',
  fields: [
    defineField({
      name: 'title',
      title: 'Service Name',
      type: 'string',
    }),
    defineField({
      name: 'description',
      title: 'Service Description',
      type: 'text',
      rows: 3,
    }),
    defineField({
      name: 'icon',
      title: 'Icon Name',
      type: 'string',
      description: 'Lucide icon name (e.g., Brush, Building, Square, Grid3x3)',
      options: {
        list: [
          { title: 'Brush', value: 'Brush' },
          { title: 'Building', value: 'Building' },
          { title: 'Square', value: 'Square' },
          { title: 'Grid3x3', value: 'Grid3x3' },
          { title: 'Wrench', value: 'Wrench' },
          { title: 'Hammer', value: 'Hammer' },
        ],
      },
    }),
    defineField({
      name: 'featured',
      title: 'Featured Service',
      type: 'boolean',
      description: 'Mark as featured to highlight this service',
      initialValue: false,
    }),
    defineField({
      name: 'order',
      title: 'Display Order',
      type: 'number',
      description: 'Order in which this service appears (1, 2, 3, etc.)',
    }),
  ],
  orderings: [
    {
      title: 'Display Order',
      name: 'orderAsc',
      by: [{ field: 'order', direction: 'asc' }],
    },
  ],
})