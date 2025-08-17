import { defineConfig } from 'sanity'
import { structureTool } from 'sanity/structure'
import { visionTool } from '@sanity/vision'
import { schemaTypes } from './schemas'

export default defineConfig({
  name: 'gold-standard-constructions',
  title: 'Gold Standard Constructions CMS',
  
  projectId: 'demo-project', // Replace with your Sanity project ID
  dataset: 'production',

  plugins: [structureTool(), visionTool()],

  schema: {
    types: schemaTypes,
  },
  
  tools: (prev) => {
    // Add custom studio URL for easier access
    return prev
  }
})