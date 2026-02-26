interface AvatarProps {
  gradient: string
}

export default function Avatar({ gradient }: AvatarProps) {
  return (
    <div className={`w-12 h-12 rounded-full bg-gradient-to-tr ${gradient}`} />
  )
}
