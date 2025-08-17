import { useState } from 'react';
import { Eye, ArrowRight } from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';

const Gallery = () => {
  const [selectedCategory, setSelectedCategory] = useState('all');

  const categories = [
    { id: 'all', label: 'All Projects' },
    { id: 'luxury-painting', label: 'Luxury Painting' },
    { id: 'commercial', label: 'Commercial' },
    { id: 'millwork', label: 'Millwork' },
    { id: 'flooring', label: 'Flooring' }
  ];

  const projects = [
    {
      id: 1,
      title: 'Luxury Living Room Transformation',
      category: 'luxury-painting',
      image: '/placeholder.svg',
      description: 'Premium interior painting with custom color consultation and designer finishes.'
    },
    {
      id: 2,
      title: 'Commercial Office Complex',
      category: 'commercial',
      image: '/placeholder.svg',
      description: 'Large-scale commercial painting project with coordinated scheduling.'
    },
    {
      id: 3,
      title: 'Custom Crown Molding & Trim',
      category: 'millwork',
      image: '/placeholder.svg',
      description: 'Handcrafted millwork installation with precision finishing.'
    },
    {
      id: 4,
      title: 'Epoxy Garage Floor',
      category: 'flooring',
      image: '/placeholder.svg',
      description: 'Durable epoxy coating with decorative flake system.'
    },
    {
      id: 5,
      title: 'Executive Conference Room',
      category: 'commercial',
      image: '/placeholder.svg',
      description: 'Sophisticated commercial interior with premium finishes.'
    },
    {
      id: 6,
      title: 'Luxury Master Bedroom',
      category: 'luxury-painting',
      image: '/placeholder.svg',
      description: 'Elegant bedroom transformation with textured accent walls.'
    },
    {
      id: 7,
      title: 'LVT Flooring Installation',
      category: 'flooring',
      image: '/placeholder.svg',
      description: 'Luxury vinyl tile installation with seamless transitions.'
    },
    {
      id: 8,
      title: 'Custom Kitchen Cabinets',
      category: 'millwork',
      image: '/placeholder.svg',
      description: 'Cabinet refinishing and custom trim work for modern kitchen.'
    }
  ];

  const filteredProjects = selectedCategory === 'all' 
    ? projects 
    : projects.filter(project => project.category === selectedCategory);

  return (
    <section id="gallery" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="text-4xl md:text-5xl font-bold mb-6">
              <span className="text-foreground">Our </span>
              <span className="text-gradient-gold">Portfolio</span>
            </h2>
            <div className="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Explore our gallery of completed projects showcasing our commitment 
              to excellence and attention to detail.
            </p>
          </div>

          {/* Category Filter */}
          <div className="flex flex-wrap justify-center gap-4 mb-12">
            {categories.map((category) => (
              <Button
                key={category.id}
                variant={selectedCategory === category.id ? "default" : "outline"}
                onClick={() => setSelectedCategory(category.id)}
                className={selectedCategory === category.id 
                  ? "gradient-gold text-dark font-semibold" 
                  : "border-gold/50 text-gold hover:bg-gold hover:text-dark"
                }
              >
                {category.label}
              </Button>
            ))}
          </div>

          {/* Gallery Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            {filteredProjects.map((project, index) => (
              <Card 
                key={project.id} 
                className="group overflow-hidden bg-card border-border hover-lift animate-scale-in"
                style={{ animationDelay: `${index * 0.1}s` }}
              >
                <div className="relative aspect-[4/3] overflow-hidden">
                  <img
                    src={project.image}
                    alt={project.title}
                    className="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                  />
                  <div className="absolute inset-0 bg-dark/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <Button
                      variant="outline"
                      size="sm"
                      className="border-gold text-gold hover:bg-gold hover:text-dark"
                    >
                      <Eye className="w-4 h-4 mr-2" />
                      View Details
                    </Button>
                  </div>
                </div>
                
                <div className="p-6">
                  <h3 className="text-xl font-semibold text-foreground mb-2 group-hover:text-gold transition-colors">
                    {project.title}
                  </h3>
                  <p className="text-muted-foreground text-sm leading-relaxed">
                    {project.description}
                  </p>
                </div>
              </Card>
            ))}
          </div>

          {/* CTA Section */}
          <div className="text-center">
            <div className="bg-card p-12 rounded-lg border border-border shadow-card">
              <h3 className="text-3xl font-bold mb-4">
                <span className="text-foreground">Ready to See Your Project </span>
                <span className="text-gradient-gold">Come to Life?</span>
              </h3>
              <p className="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
                Every project in our gallery started with a vision. Let us help you 
                transform your space with the same attention to detail and quality craftsmanship.
              </p>
              
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <Button 
                  size="lg" 
                  className="gradient-gold text-dark font-semibold px-8 py-4 shadow-gold group"
                >
                  Start Your Project Today
                  <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                </Button>
                
                <Button 
                  variant="outline" 
                  size="lg"
                  className="border-gold text-gold hover:bg-gold hover:text-dark px-8 py-4"
                >
                  View All Projects
                </Button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Gallery;