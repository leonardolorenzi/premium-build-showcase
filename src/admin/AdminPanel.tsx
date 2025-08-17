import React from 'react';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { ExternalLink, Settings, Database, Edit, Image } from 'lucide-react';

const AdminPanel = () => {
  return (
    <div className="min-h-screen bg-background p-8">
      <div className="max-w-4xl mx-auto">
        {/* Header */}
        <div className="text-center mb-12">
          <h1 className="text-4xl font-bold mb-4">
            <span className="text-foreground">Content Management </span>
            <span className="text-gradient-gold">System</span>
          </h1>
          <p className="text-xl text-muted-foreground">
            Manage your website content with ease
          </p>
        </div>

        {/* Setup Instructions */}
        <Card className="p-8 mb-8 bg-card border-border">
          <h2 className="text-2xl font-bold mb-6 text-gold flex items-center">
            <Settings className="mr-3" />
            Quick Setup Guide
          </h2>
          
          <div className="space-y-6">
            <div className="bg-background p-6 rounded-lg border border-border">
              <h3 className="text-lg font-semibold mb-3 text-foreground">Step 1: Create Sanity Project</h3>
              <p className="text-muted-foreground mb-4">
                Create a free Sanity account and project at sanity.io
              </p>
              <Button 
                variant="outline" 
                className="border-gold text-gold hover:bg-gold hover:text-dark"
                onClick={() => window.open('https://sanity.io', '_blank')}
              >
                <ExternalLink className="mr-2 w-4 h-4" />
                Go to Sanity.io
              </Button>
            </div>

            <div className="bg-background p-6 rounded-lg border border-border">
              <h3 className="text-lg font-semibold mb-3 text-foreground">Step 2: Update Configuration</h3>
              <p className="text-muted-foreground mb-4">
                Replace the projectId in <code className="bg-dark-card px-2 py-1 rounded">src/lib/sanity.ts</code> with your project ID
              </p>
              <div className="bg-dark-card p-4 rounded-lg font-mono text-sm text-foreground">
                projectId: 'your-project-id' // Replace 'demo-project'
              </div>
            </div>

            <div className="bg-background p-6 rounded-lg border border-border">
              <h3 className="text-lg font-semibold mb-3 text-foreground">Step 3: Deploy Sanity Studio</h3>
              <p className="text-muted-foreground mb-4">
                Run these commands to deploy your CMS admin interface:
              </p>
              <div className="bg-dark-card p-4 rounded-lg font-mono text-sm text-foreground space-y-2">
                <div>npm install -g @sanity/cli</div>
                <div>sanity login</div>
                <div>sanity deploy</div>
              </div>
            </div>
          </div>
        </Card>

        {/* Features Grid */}
        <div className="grid md:grid-cols-2 gap-6 mb-8">
          <Card className="p-6 bg-card border-border hover-lift">
            <div className="flex items-center mb-4">
              <Edit className="w-8 h-8 text-gold mr-3" />
              <h3 className="text-xl font-semibold text-foreground">Content Editing</h3>
            </div>
            <ul className="space-y-2 text-muted-foreground">
              <li>• Hero section text & images</li>
              <li>• About company information</li>
              <li>• Services & descriptions</li>
              <li>• Contact information</li>
              <li>• Testimonials & reviews</li>
            </ul>
          </Card>

          <Card className="p-6 bg-card border-border hover-lift">
            <div className="flex items-center mb-4">
              <Image className="w-8 h-8 text-gold mr-3" />
              <h3 className="text-xl font-semibold text-foreground">Media Management</h3>
            </div>
            <ul className="space-y-2 text-muted-foreground">
              <li>• Upload background images</li>
              <li>• Manage project galleries</li>
              <li>• Client photos & logos</li>
              <li>• Optimized image delivery</li>
              <li>• Responsive image variants</li>
            </ul>
          </Card>
        </div>

        {/* Current Status */}
        <Card className="p-8 bg-dark-card border-gold/20 text-center">
          <Database className="w-12 h-12 text-gold mx-auto mb-4" />
          <h3 className="text-xl font-bold text-gold mb-4">CMS Status</h3>
          <p className="text-muted-foreground mb-6">
            Your website is currently using default content. Once you set up Sanity, 
            all content will be editable through your admin panel.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button 
              className="gradient-gold text-dark font-semibold"
              onClick={() => window.open('https://docs.sanity.io/docs/getting-started', '_blank')}
            >
              <ExternalLink className="mr-2 w-4 h-4" />
              Sanity Documentation
            </Button>
            <Button 
              variant="outline" 
              className="border-gold text-gold hover:bg-gold hover:text-dark"
              onClick={() => window.open('/admin', '_blank')}
            >
              Access Admin Panel
            </Button>
          </div>
        </Card>
      </div>
    </div>
  );
};

export default AdminPanel;