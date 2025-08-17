import { createClient } from '@sanity/client'
import imageUrlBuilder from '@sanity/image-url'

// Default configuration for demo - users can update these
export const client = createClient({
  projectId: 'demo-project', // Replace with your Sanity project ID
  dataset: 'production',
  useCdn: true,
  apiVersion: '2024-01-01',
})

const builder = imageUrlBuilder(client)

export function urlFor(source: any) {
  return builder.image(source)
}

// Default content for when CMS is not connected
export const defaultContent = {
  hero: {
    title: "Luxury Craftsmanship, Built to Last",
    subtitle: "Gold Standard Constructions LLC delivers premium residential & commercial construction services with unmatched quality and attention to detail.",
    buttonText: "Request a Free Quote",
    backgroundImage: null
  },
  about: {
    title: "About Gold Standard Constructions",
    description: "Gold Standard Constructions LLC specializes in luxury residential & commercial painting, sheetrock & taping, trimming & cabinets, epoxy flooring, and LVT flooring. Founded by Leonardo Henrique Prestes Lorenzi and Edson Da Silva, our company delivers high-quality, sustainable, and client-focused construction services in New Jersey.",
    founders: "Leonardo Henrique Prestes Lorenzi and Edson Da Silva",
    license: "EIN 33-2032997, Entity ID 0451180341"
  },
  services: [
    {
      title: "Luxury Painting",
      description: "Premium interior and exterior painting with high-end finishes and attention to detail.",
      icon: "Brush"
    },
    {
      title: "Commercial Painting", 
      description: "Professional commercial painting services for offices, retail spaces, and industrial buildings.",
      icon: "Building"
    },
    {
      title: "Sheetrock & Taping",
      description: "Expert drywall installation, repair, and finishing for smooth, professional results.",
      icon: "Square"
    },
    {
      title: "Trimming & Cabinets",
      description: "Custom trim work and cabinet installation to add elegance and functionality.",
      icon: "Square"
    },
    {
      title: "Epoxy Flooring",
      description: "Durable, high-gloss epoxy flooring solutions for residential and commercial spaces.",
      icon: "Grid3x3"
    },
    {
      title: "LVT Flooring",
      description: "Luxury vinyl tile installation with premium materials and expert craftsmanship.",
      icon: "Grid3x3"
    }
  ],
  testimonials: [
    {
      name: "Michael Rodriguez",
      role: "Homeowner",
      content: "Gold Standard Constructions transformed our home with their luxury painting services. The attention to detail and quality of work exceeded our expectations.",
      rating: 5
    },
    {
      name: "Sarah Chen",
      role: "Business Owner", 
      content: "Their commercial painting team completed our office renovation ahead of schedule with exceptional quality. Highly recommend their professional services.",
      rating: 5
    },
    {
      name: "David Thompson",
      role: "Property Manager",
      content: "We've worked with Gold Standard on multiple projects. Their epoxy flooring and trim work is always top-notch and competitively priced.",
      rating: 5
    }
  ],
  contact: {
    title: "Get Your Free Estimate Today",
    description: "Ready to start your next construction project? Contact us for a free consultation and estimate.",
    email: "contact@goldstandardconstructions.com",
    phone: "(973) 417-1404",
    addresses: [
      {
        city: "Newark",
        state: "NJ",
        type: "Main Office"
      },
      {
        city: "Kearny", 
        state: "NJ",
        type: "Branch Office"
      }
    ],
    social: {
      instagram: "https://instagram.com/GoldStandardConstructions",
      linkedin: "https://linkedin.com/company/gold-standard-constructions"
    }
  }
}