import { defineField, defineType } from 'sanity'

export default defineType({
  name: 'about',
  title: 'About Section',
  type: 'document',
  fields: [
    defineField({
      name: 'title',
      title: 'Section Title',
      type: 'string',
    }),
    defineField({
      name: 'description',
      title: 'Company Description',
      type: 'text',
      rows: 4,
    }),
    defineField({
      name: 'founders',
      title: 'Founders Names',
      type: 'string',
      description: 'Names of the company founders'
    }),
    defineField({
      name: 'license',
      title: 'License Information',
      type: 'string',
      description: 'EIN and Entity ID information'
    }),
    defineField({
      name: 'image',
      title: 'About Section Image',
      type: 'image',
      options: {
        hotspot: true,
      },
    }),
  ],
})