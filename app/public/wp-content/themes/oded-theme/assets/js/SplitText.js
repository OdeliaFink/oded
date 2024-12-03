import React from 'react';
import { motion } from 'framer-motion';

export function SplitText({ children }) {
  const words = children.split(' ');

  return (
    <div style={{ display: 'inline-block' }}>
      {words.map((word, i) => (
        <motion.span
          key={`${word}-${i}`}
          initial={{ y: '100%', opacity: 0 }}
          animate={{ y: 0, opacity: 1 }}
          transition={{
            delay: i * 0.2,
            duration: 0.5,
            ease: 'easeOut',
          }}
          style={{ display: 'inline-block', overflow: 'hidden' }}
        >
          {word + (i !== words.length - 1 ? '\u00A0' : '')}
        </motion.span>
      ))}
    </div>
  );
}
