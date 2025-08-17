import { Award, Shield, Users, Target } from 'lucide-react';
import { Card } from '@/components/ui/card';

const About = () => {
  const founders = [
    {
      name: 'Leonardo Henrique Prestes Lorenzi',
      role: 'Co-Founder & Master Craftsman',
    },
    {
      name: 'Edson Da Silva',
      role: 'Co-Founder & Project Director',
    }
  ];

  const values = [
    {
      icon: <Award className="w-8 h-8 text-gold" />,
      title: 'Excellence',
      description: 'Uncompromising commitment to superior craftsmanship and attention to detail.'
    },
    {
      icon: <Shield className="w-8 h-8 text-gold" />,
      title: 'Reliability',
      description: 'Licensed, insured, and trusted by clients throughout New Jersey.'
    },
    {
      icon: <Users className="w-8 h-8 text-gold" />,
      title: 'Partnership',
      description: 'Collaborative approach ensuring your vision becomes reality.'
    },
    {
      icon: <Target className="w-8 h-8 text-gold" />,
      title: 'Precision',
      description: 'Meticulous execution from initial concept to final delivery.'
    }
  ];

  return (
    <section id="about" className="py-20 bg-card">
      <div className="container mx-auto px-4">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="text-4xl md:text-5xl font-bold mb-6">
              <span className="text-foreground">About </span>
              <span className="text-gradient-gold">Gold Standard</span>
            </h2>
            <div className="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Founded on the principles of excellence and integrity, Gold Standard Constructions LLC 
              delivers premium construction and painting services that exceed expectations.
            </p>
          </div>

          {/* Main Content */}
          <div className="grid lg:grid-cols-2 gap-16 items-center mb-20">
            {/* Left Content */}
            <div className="animate-slide-up">
              <h3 className="text-2xl font-bold mb-6 text-foreground">
                Luxury Construction & Painting Specialists
              </h3>
              
              <div className="space-y-4 text-muted-foreground mb-8">
                <p>
                  Gold Standard Constructions LLC specializes in luxury residential and commercial 
                  painting, sheetrock & taping, trimming & cabinets, epoxy flooring, and LVT flooring. 
                  Our commitment to quality and client satisfaction has made us a trusted name in 
                  construction throughout New Jersey.
                </p>
                
                <p>
                  Founded by Leonardo Henrique Prestes Lorenzi and Edson Da Silva, our company 
                  delivers high-quality, sustainable, and client-focused construction services. 
                  Every project is approached with meticulous attention to detail and a dedication 
                  to exceeding expectations.
                </p>
                
                <p>
                  Licensed and insured, we serve clients in Newark, Kearny, and throughout 
                  New Jersey with the professionalism and expertise that defines the gold standard 
                  in construction services.
                </p>
              </div>

              {/* Company Details */}
              <div className="bg-dark-card p-6 rounded-lg border border-border">
                <h4 className="text-lg font-semibold mb-4 text-gold">Company Information</h4>
                <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                  <div>
                    <span className="text-muted-foreground">EIN:</span>
                    <span className="ml-2 text-foreground">33-2032997</span>
                  </div>
                  <div>
                    <span className="text-muted-foreground">Entity ID:</span>
                    <span className="ml-2 text-foreground">0451180341</span>
                  </div>
                  <div>
                    <span className="text-muted-foreground">Licensed in:</span>
                    <span className="ml-2 text-foreground">New Jersey</span>
                  </div>
                  <div>
                    <span className="text-muted-foreground">Established:</span>
                    <span className="ml-2 text-foreground">2020</span>
                  </div>
                </div>
              </div>
            </div>

            {/* Right Content - Founders */}
            <div className="animate-scale-in">
              <div className="bg-dark-card p-8 rounded-lg shadow-card border border-border">
                <h3 className="text-2xl font-bold mb-6 text-center text-gold">Leadership Team</h3>
                
                <div className="space-y-6">
                  {founders.map((founder, index) => (
                    <div key={index} className="text-center p-6 bg-background/50 rounded-lg border border-border/50">
                      <h4 className="text-lg font-semibold text-foreground mb-2">
                        {founder.name}
                      </h4>
                      <p className="text-muted-foreground">{founder.role}</p>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>

          {/* Values Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {values.map((value, index) => (
              <Card key={index} className="p-6 text-center hover-lift bg-dark-card border-border">
                <div className="flex justify-center mb-4">
                  {value.icon}
                </div>
                <h3 className="text-xl font-semibold mb-3 text-foreground">{value.title}</h3>
                <p className="text-muted-foreground text-sm">{value.description}</p>
              </Card>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;