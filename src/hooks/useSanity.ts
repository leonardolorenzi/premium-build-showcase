import { useState, useEffect } from 'react'
import { client, defaultContent } from '@/lib/sanity'

export function useSanityData<T>(query: string, defaultValue: T) {
  const [data, setData] = useState<T>(defaultValue)
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState<string | null>(null)

  useEffect(() => {
    async function fetchData() {
      try {
        setLoading(true)
        const result = await client.fetch(query)
        if (result) {
          setData(result)
        }
      } catch (err) {
        console.warn('Sanity fetch failed, using default content:', err)
        setError(err instanceof Error ? err.message : 'Failed to fetch data')
      } finally {
        setLoading(false)
      }
    }

    fetchData()
  }, [query])

  return { data, loading, error }
}

export function useHeroData() {
  return useSanityData(
    '*[_type == "hero"][0]',
    defaultContent.hero
  )
}

export function useAboutData() {
  return useSanityData(
    '*[_type == "about"][0]',
    defaultContent.about
  )
}

export function useServicesData() {
  return useSanityData(
    '*[_type == "service"] | order(order asc)',
    defaultContent.services
  )
}

export function useTestimonialsData() {
  return useSanityData(
    '*[_type == "testimonial"] | order(order asc)',
    defaultContent.testimonials
  )
}

export function useContactData() {
  return useSanityData(
    '*[_type == "contact"][0]',
    defaultContent.contact
  )
}

export function useSiteSettings() {
  return useSanityData(
    '*[_type == "siteSettings"][0]',
    {
      siteName: 'Gold Standard Constructions LLC',
      siteDescription: 'Luxury residential & commercial construction services in New Jersey',
      footerText: '© 2024 Gold Standard Constructions LLC. All rights reserved.'
    }
  )
}