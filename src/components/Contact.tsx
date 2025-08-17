import { useState } from 'react';
import { MapPin, Phone, Mail, Clock, Send } from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { Card } from '@/components/ui/card';
import { useToast } from '@/hooks/use-toast';

const Contact = () => {
  const { toast } = useToast();
  const [isSubmitting, setIsSubmitting] = useState(false);

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setIsSubmitting(true);
    
    // Simulate form submission
    setTimeout(() => {
      setIsSubmitting(false);
      toast({
        title: "Message Sent!",
        description: "Thank you for your inquiry. We'll get back to you within 24 hours.",
      });
    }, 2000);
  };

  const contactInfo = [
    {
      icon: <Phone className="w-6 h-6 text-gold" />,
      title: 'Phone',
      details: '(973) 417-1404',
      subtitle: 'Call us anytime'
    },
    {
      icon: <Mail className="w-6 h-6 text-gold" />,
      title: 'Email',
      details: 'contact@goldstandardconstructions.com',
      subtitle: 'We respond within 24hrs'
    },
    {
      icon: <MapPin className="w-6 h-6 text-gold" />,
      title: 'Locations',
      details: 'Newark & Kearny, NJ',
      subtitle: 'Serving all of New Jersey'
    },
    {
      icon: <Clock className="w-6 h-6 text-gold" />,
      title: 'Hours',
      details: 'Mon-Fri: 8AM-6PM',
      subtitle: 'Weekend consultations available'
    }
  ];

  return (
    <section id="contact" className="py-20 bg-card">
      <div className="container mx-auto px-4">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="text-4xl md:text-5xl font-bold mb-6">
              <span className="text-foreground">Get Your Free </span>
              <span className="text-gradient-gold">Estimate</span>
            </h2>
            <div className="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Ready to transform your space? Contact us today for a complimentary 
              consultation and detailed project estimate.
            </p>
          </div>

          <div className="grid lg:grid-cols-2 gap-12">
            {/* Contact Form */}
            <div className="animate-slide-up">
              <Card className="p-8 bg-background border-border shadow-card">
                <h3 className="text-2xl font-bold mb-6 text-foreground">Send us a message</h3>
                
                <form onSubmit={handleSubmit} className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-4">
                    <div>
                      <label className="block text-sm font-medium text-foreground mb-2">
                        First Name *
                      </label>
                      <Input 
                        required
                        className="bg-card border-border focus:border-gold"
                        placeholder="Your first name"
                      />
                    </div>
                    <div>
                      <label className="block text-sm font-medium text-foreground mb-2">
                        Last Name *
                      </label>
                      <Input 
                        required
                        className="bg-card border-border focus:border-gold"
                        placeholder="Your last name"
                      />
                    </div>
                  </div>

                  <div>
                    <label className="block text-sm font-medium text-foreground mb-2">
                      Email Address *
                    </label>
                    <Input 
                      type="email" 
                      required
                      className="bg-card border-border focus:border-gold"
                      placeholder="your.email@example.com"
                    />
                  </div>

                  <div>
                    <label className="block text-sm font-medium text-foreground mb-2">
                      Phone Number
                    </label>
                    <Input 
                      type="tel"
                      className="bg-card border-border focus:border-gold"
                      placeholder="(123) 456-7890"
                    />
                  </div>

                  <div>
                    <label className="block text-sm font-medium text-foreground mb-2">
                      Service Needed
                    </label>
                    <select className="w-full p-3 bg-card border border-border rounded-md focus:border-gold focus:outline-none">
                      <option>Select a service</option>
                      <option>Luxury Painting</option>
                      <option>Commercial Painting</option>
                      <option>Sheetrock & Taping</option>
                      <option>Trimming & Cabinets</option>
                      <option>Epoxy Flooring</option>
                      <option>LVT Flooring</option>
                      <option>Multiple Services</option>
                    </select>
                  </div>

                  <div>
                    <label className="block text-sm font-medium text-foreground mb-2">
                      Project Details *
                    </label>
                    <Textarea 
                      required
                      className="bg-card border-border focus:border-gold min-h-[120px]"
                      placeholder="Tell us about your project, timeline, and any specific requirements..."
                    />
                  </div>

                  <Button 
                    type="submit" 
                    disabled={isSubmitting}
                    className="w-full gradient-gold text-dark font-semibold py-4 shadow-gold"
                  >
                    {isSubmitting ? (
                      'Sending Message...'
                    ) : (
                      <>
                        Send Message
                        <Send className="ml-2 w-4 h-4" />
                      </>
                    )}
                  </Button>
                </form>
              </Card>
            </div>

            {/* Contact Information */}
            <div className="animate-scale-in">
              <div className="space-y-6 mb-8">
                {contactInfo.map((info, index) => (
                  <Card key={index} className="p-6 bg-background border-border hover-lift">
                    <div className="flex items-start space-x-4">
                      <div className="p-3 bg-gold/10 rounded-lg">
                        {info.icon}
                      </div>
                      <div>
                        <h4 className="text-lg font-semibold text-foreground mb-1">
                          {info.title}
                        </h4>
                        <p className="text-foreground font-medium">{info.details}</p>
                        <p className="text-sm text-muted-foreground">{info.subtitle}</p>
                      </div>
                    </div>
                  </Card>
                ))}
              </div>

              {/* Emergency Contact */}
              <Card className="p-8 bg-dark-card border-gold/20 text-center">
                <h3 className="text-xl font-bold text-gold mb-4">Emergency Services</h3>
                <p className="text-muted-foreground mb-4">
                  Need immediate assistance? We offer 24/7 emergency construction services 
                  for urgent repairs and critical situations.
                </p>
                <Button 
                  variant="outline" 
                  className="border-gold text-gold hover:bg-gold hover:text-dark"
                >
                  Emergency Hotline
                </Button>
              </Card>
            </div>
          </div>

          {/* Service Areas */}
          <div className="mt-16 text-center">
            <h3 className="text-2xl font-bold mb-4 text-foreground">Service Areas</h3>
            <p className="text-muted-foreground mb-6">
              Proudly serving clients throughout New Jersey with premium construction services
            </p>
            <div className="flex flex-wrap justify-center gap-4">
              {['Newark', 'Kearny', 'Jersey City', 'Elizabeth', 'Irvington', 'East Orange', 'West Orange', 'Bloomfield'].map((city) => (
                <span key={city} className="px-4 py-2 bg-card border border-border rounded-full text-sm text-muted-foreground">
                  {city}
                </span>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;